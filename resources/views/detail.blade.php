@extends('layouts.frontend')

@section('header')
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="{{ route('homepage') }}" class="nav__logo">
          <img src="{{ asset('frontend/assets/images/Damcon-Png.png')}}" alt="logo" />
        </a>
      </nav>
    </header>
@endsection

@section('content')
 <section class="home__details section" id="home">
                <div class="home__container__details container grid">
                    <img
                        class="home__img__details"
                        src="{{ Storage::url($property->galleries->first()->photo) }}"
                        alt=""
                    />
                </div>
            </section>

            <section class="galleries container">
                @forEach($property->galleries as $gallery)
                    <img class="{{ $property->galleries->first()->photo == $gallery->photo  ? 'active' : null }}" src="{{ Storage::url($gallery->photo) }}" alt="" />
                @endforeach
            </section>

            <section class="container">
                <h3 class="section__title">Description</h3>
                    @if(session()->has('message'))
                        <div class="alert" style="position: relative;text-align: center;background-color: lightgreen;padding: 1rem;margin-bottom: .5rem;color: green;border-radius: .25rem;">
                            {{ session()->get('message') }}
                            <i id="hide" style="font-size: 1.5rem;cursor: pointer;position: absolute;top: .25rem;right: .25rem;" class='bx bx-x'></i>
                        </div>
                    @endif

                <div class="card__container">
                    <article class="description__content">
                        <div class="description__header">
                            <div class="description__category">
                                <i class="bx bxs-pin"></i>
                                <span>{{ $property->category->name }}</span>
                            </div>
                            <div class="description__location">
                                <i class="bx bx-map"></i>
                                <span>{{ $property->location }}</span>
                            </div>
                            <h5 class="description__price">${{ $property->price }}</h5>
                        </div>
                        <p class="description__text" style="text-align: justify;">
                             {{$property->description}}
                        </p>
                        <div class="description__footer">
                            <div class="description__footer-item">
                                <div class="description__feature">
                                    <span class="description__feature-icon">
                                        <i class="bx bx-building-house"></i>
                                    </span>
                                    <div class="description__feature-container">
                                        <h6>Bedrooms</h6>
                                        <span>{{$property->bed}} room</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description__footer-item">
                                <div class="description__feature">
                                    <span class="description__feature-icon">
                                    <i class='bx bx-bath'></i>
                                    </span>
                                    <div class="description__feature-container">
                                        <h6>Bath Room</h6>
                                        <span>{{ $property->bath}} bath</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description__footer-item">
                                <div class="description__feature">
                                    <span class="description__feature-icon">
                                    <i class='bx bx-border-radius'></i>
                                    </span>
                                    <div class="description__feature-container">
                                        <h6>Dimension</h6>
                                        <span>{{ $property->dimension }} sqft</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description__footer-item">
                                <div class="description__feature">
                                    <span class="description__feature-icon">
                                    <i class='bx bx-calendar'></i>
                                    </span>
                                    <div class="description__feature-container">
                                        <h6>Year Build</h6>
                                        <span>{{ date('Y', strtotime($property->year_build)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="contact__content">
                        <div class="contact__header">
                            <h3>Contact Owner</h3>
                        </div>
                        <form action="{{ route('messages.store') }}" method="post" class="form__details">
                            @csrf
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Name"
                                    name="name"
                                    value="{{ old('name') }}"
                                />
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Email"
                                    name="email"
                                    value="{{ old('email') }}"
                                />
                            </div>
                            <div class="form-group">
                                <textarea
                                    name="message"
                                    class="form-control"
                                    id=""
                                    cols="30"
                                    rows="5"
                                    placeholder="Message"
                                >{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-contact">Send</button>
                        </form>
                    </article>
                </div>
            </section>
@endsection

@push('style-alt')
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/detail.css')}}" />
    <style>
        .hide {
            display: none;
        }
    </style>
@endpush

@push('script-alt')
  <script>
    //   hide
    const hideButton = document.getElementById('hide');
    const alert = document.querySelector('.alert');
    if(hideButton && alert) {
        hideButton.addEventListener('click', () => {
            alert.classList.add('hide');
        })
    }
    // end
            const largeImage = document.querySelector(".home__img__details");
            const images = document.querySelectorAll(".galleries img");
            images.forEach((image, i) => {
                image.addEventListener("click", () => {
                    largeImage.src = image.src;
                    image.style.transition = ".2s";
                    const current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(
                        "active",
                        ""
                    );
                    image.className += " active";
                });
            });
        </script>

@endpush
