@extends('layouts.frontend')

@section('header')
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="{{ route('homepage') }}" class="nav__logo">
          <img src="{{ asset('frontend/assets/images/Damcon-Png.png')}}" alt="logo" />
        </a>

        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="bx bx-home-alt-2"></i>
                <span>Home</span>
              </a>
            </li>


            <li class="nav__item">
              <a href="#popular" class="nav__link">
                <i class="bx bx-building-house"></i>
                <span>Developments</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="#value" class="nav__link">
                <i class="bx bx-award"></i>
                <span>About</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="#contact" class="nav__link">
                <i class="bx bx-phone"></i>
                <span>Contact</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="{{ route('login') }}" class="nav__link">
                <i class='bx bx-log-in' ></i>
                <span></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Theme change button -->
        <i class="bx bx-moon change-theme" id="theme-button"></i>

        <a href="{{ route('login') }}" class="button nav__button">
          <i class='bx bx-log-in' ></i>
          Login
        </a>
      </nav>
    </header>
@endsection

@section('content')

      <!--==================== HOME ====================-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__data">
            <h1 class="home__title">
              Discover  <br />
              Most Suitable <br />
              Property
            </h1>

            <p class="home__description">
              Find a variety of properties that suit you very easily, forget all
              difficulties in finding a residence for you
            </p>

            @if(session()->has('message'))
              <div class="alert" style="text-align: center;position: relative;margin-bottom: .5rem;padding: .5rem;border-radius: .25rem;background-color: lightgreen;color: green;" class="alert">
                {{session()->get('message')}}
                <i id="hide" style="font-size: 1.5rem;cursor: pointer;position: absolute;top: .25rem;right: .25rem;" class='bx bx-x'></i>
              </div>
            @endif

            <form action="{{ route('subscribers.store') }}" method="post" class="home__search">
              @csrf
              <i class="bx bxs-map"></i>
              <input
                type="search"
                placeholder="Enter your email..."
                class="home__search-input"
                name="email"
                value="{{old('email') }}"
              />
              <button type="submit" class="button">Subscribe</button>
            </form>


            <div class="home__value">
              <div>
                <h1 class="home_value-number">9K <span>+</span></h1>
                <span class="home__value_description">
                  Premium <br />
                  Product
                </span>
              </div>
              <div>
                <h1 class="home_value-number">2K <span>+</span></h1>
                <span class="home__value_description">
                  Happy <br />
                  Customer
                </span>
              </div>
              <div>
                <h1 class="home_value-number">27K <span>+</span></h1>
                <span class="home__value_description">
                  Awards <br />
                  winning
                </span>
              </div>
            </div>
          </div>

          <div class="home__images">
            <div class="home__orbe"></div>

            <div class="home__img">
              <img src="{{ asset('frontend/assets/images/home.jpg')}}" alt="home" />
            </div>
          </div>
        </div>
      </section>

      <!--==================== POPULAR ====================-->
      <section class="popular section" id="popular">
        <div class="container">
          <span class="section__subtitle">Best Categories</span>
          <h2 class="section__title">Explore categories<span>.</span></h2>

          <div class="popular__container grid">
            @foreach($categories as $category)
                <article class="popular__card">
                <img
                    src="{{ Storage::url($category->banner) }}"
                    alt=""
                    class="popular__img"
                />
                <div class="popular__date">
                    <h3 class="popular__title">{{ $category->name }}</h3>
                    <p class="popular__description"> {{$category->properties->count()}} Properties </p>
                </div>
                </article>
            @endforeach
          </div>
        </div>
      </section>

        <section class="section" id="property">
        <div class="container">
          <span class="section__subtitle">Best Choice</span>
          <h2 class="section__title">Popular Property<span>.</span></h2>

          <div class="property__container grid">
            @foreach($properties as $property)
                <article class="property__card">
                <a href="{{ route('detail', $property->slug)}}">
                    <div class="property__images">
                    <img
                        src="{{ Storage::url($property->galleries()->first()->photo) }}"
                        alt=""
                        class="property__img"
                    />
                    <span class="property__badge">{{ $property->category->name}} </span>
                    </div>
                    <div class="property__date">
                    <!-- <h2 class="property__price"><span>$</span>{{ $property->price }}</h2> -->
                    <h3 class="property__title">{{ $property->name }}</h3>
                    <span class="property__description">
                        {{ $property->address }}</span
                    >
                    </div>
                </a>
                </article>
            @endforeach
          </div>
        </div>
      </section>

      <!--==================== VALUE ====================-->
      <section class="value section" id="value">
        <div class="value__container container grid">
          <div class="value__images">
            <div class="value__orbe"></div>
            <div class="value__img">
              <img src="{{ asset('frontend/assets/images/value.jpg')}}" alt="value" />
            </div>
          </div>
          <div class="value__content">
            <div class="value__date">
              <span class="section__subtitle">About Us</span>
              <h2 class="section__title">
                Value We Give To You <span>.</span>
              </h2>
              <p class="value__description">
                We always ready to help by providing the best service for you.
                We believe a good place to live can make your life better. <br/>
                Real estate developer | Decor | Constructions <br/>
                Based in Elshiekh Zayed city <br/>
                Luxlury full-service <br/>
              </p>
            </div>
            <div class="value__accordion">
              <div class="value__accordion-item">
                <header class="value__accordion-header">
                  <i class="bx bxs-shield-x value__accordion-icon"></i>
                  <h3 class="value__accordion-title">
                    Best interest rates on the market
                  </h3>
                  <div class="value__accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>

                <div class="value__accordion-content">
                  <p class="value__accordion-description">
                    Price we provides is the best for you, we guarantee no price
                    changes on your property due to various unexpected cost that
                    may come.
                  </p>
                </div>
              </div>
              <div class="value__accordion-item">
                <header class="value__accordion-header">
                  <i class="bx bxs-x-square value__accordion-icon"></i>
                  <h3 class="value__accordion-title">
                    Prevent unstable prices
                  </h3>
                  <div class="value__accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>

                <div class="value__accordion-content">
                  <p class="value__accordion-description">
                    Price we provides is the best for you, we guarantee no price
                    changes on your property due to various unexpected cost that
                    may come.
                  </p>
                </div>
              </div>
              <div class="value__accordion-item">
                <header class="value__accordion-header">
                  <i class="bx bxs-bar-chart-square value__accordion-icon"></i>
                  <h3 class="value__accordion-title">
                    Best prices on the market
                  </h3>
                  <div class="value__accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>

                <div class="value__accordion-content">
                  <p class="value__accordion-description">
                    Price we provides is the best for you, we guarantee no price
                    changes on your property due to various unexpected cost that
                    may come.
                  </p>
                </div>
              </div>
              <div class="value__accordion-item">
                <header class="value__accordion-header">
                  <i class="bx bxs-checkbox-checked value__accordion-icon"></i>
                  <h3 class="value__accordion-title">Security of your data</h3>
                  <div class="value__accordion-arrow">
                    <i class="bx bxs-down-arrow"></i>
                  </div>
                </header>

                <div class="value__accordion-content">
                  <p class="value__accordion-description">
                    Price we provides is the best for you, we guarantee no price
                    changes on your property due to various unexpected cost that
                    may come.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!--==================== SUBSCRIBE ====================-->
      <section class="subscribe section">
          <div class="subscribe__container container">
              <h1 class="subscribe__title">Get Started With Damcon</h1>
              <video src="{{ asset('frontend/assets/images/about-vid.mp4')}}" loop muted autoplay class="video"></video>
              <p class="subscribe__description">
                  Subscribe and find super attractive price quotes from us, Find your
                  residence soon
              </p>
              <form action="{{ route('subscribers.store') }}" method="post">
                @csrf
                <input class="box" type="text" value="{{old('email') }}" placeholder="Enter your email..." name="email">
                <button type="submit" class="button subscribe__button">Subscribe</button>
              </form>
            </div>
        </section>


        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
          <div class="contact__container container grid">
            <div class="contact__images">
              <div class="contact__orbe"></div>
              <div class="contact__img">
                <img src="{{ asset('frontend/assets/images/contact.png')}}" alt="contact" />
              </div>
            </div>
            <div class="contact__content">
              <div class="contact_data">
                <span class="section__subtitle">Contact Us</span>
                <h2 class="section__title">Easy to Contact Us <span>.</span></h2>
                <p class="contact__description">
                  Is there a problem finding your dream home? Need a guide in
                  buying first home? or need a consultation on residential issues?
                  just contact us.
                </p>
              </div>

              <div class="contact__card">
                <div class="contact__card-box">
                  <div class="contact__card-info">
                    <i class="bx bxs-phone-call"></i>
                    <div>
                      <h3 class="contact__card-title">Call</h3>
                      <p class="contact__card-description">+201016619444</p>
                    </div>
                  </div>
                  <button class="button contact__card-button">Call Now</button>
                </div>
                <div class="contact__card-box">
                  <div class="contact__card-info">
                    <i class="bx bxs-message-rounded-dots"></i>
                    <div>
                      <h3 class="contact__card-title">Chat</h3>
                      <p class="contact__card-description">+201016619444</p>
                    </div>
                  </div>
                  <button class="button contact__card-button">Chat Now</button>
                </div>
                <div class="contact__card-box">
                  <div class="contact__card-info">
                    <i class="bx bxs-video"></i>
                    <div>
                      <h3 class="contact__card-title">Video Call</h3>
                      <p class="contact__card-description">+201016619444</p>
                    </div>
                  </div>
                  <button class="button contact__card-button">
                    Video Call Now
                  </button>
                </div>
                <div class="contact__card-box">
                  <div class="contact__card-info">
                    <i class="bx bxs-envelope"></i>
                    <div>
                      <h3 class="contact__card-title">Message</h3>
                      <p class="contact__card-description">+201016619444</p>
                    </div>
                  </div>
                  <button class="button contact__card-button">Message Now</button>
                </div>
              </div>
            </div>
          </div>


          @if(session()->has('message'))
                        <div class="alert" style="position: relative;text-align: center;background-color: lightgreen;padding: 1rem;margin-bottom: .5rem;color: green;border-radius: .25rem;">
                            {{ session()->get('message') }}
                            <i id="hide" style="font-size: 1.5rem;cursor: pointer;position: absolute;top: .25rem;right: .25rem;" class='bx bx-x'></i>
                        </div>
                    @endif

          <div class="row">
              <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.900280803161!2d30.97961331511492!3d30.039718581883974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb81bafceed147aae!2zMzDCsDAyJzIzLjAiTiAzMMKwNTgnNTQuNSJF!5e0!3m2!1sen!2seg!4v1678120565008!5m2!1sen!2seg" allowfullscreen="" loading="lazy"></iframe>

              <form action="{{ route('messages.store') }}" method="post" class="form">
                            @csrf
                            <div class="form-group">
                                <label for=""><i class='bx bx-user' ></i> Name</label>
                                <input
                                    type="text"
                                    class="box"
                                    placeholder="Name"
                                    name="name"
                                    value="{{ old('name') }}"
                                />
                            </div>
                            <div class="form-group">
                                <label for=""><i class='bx bx-envelope'></i> Email</label>
                                <input
                                    type="text"
                                    class="box"
                                    placeholder="Email"
                                    name="email"
                                    value="{{ old('email') }}"
                                />
                            </div>
                            <div class="form-group">
                                <label for=""><i class='bx bx-message-rounded-dots'></i> Message</label>
                                <textarea
                                    name="message"
                                    class="box"
                                    id=""
                                    cols="30"
                                    rows="5"
                                    placeholder="Message"
                                >{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" class="button">send message <i class='bx bx-send' ></i></button>
                        </form>
          </div>
        </section>


        <!--==================== LOGOS ====================-->
      <section class="logos section">
        <div class="logos__container container grid">
          <div class="logos__img">
            <img src="{{ asset('frontend/assets/images/logo1.png')}}" alt="" />
          </div>
          <div class="logos__img">
            <img src="{{ asset('frontend/assets/images/logo2.png')}}" alt="" />
          </div>
          <div class="logos__img">
            <img src="{{ asset('frontend/assets/images/logo3.png')}}" alt="" />
          </div>
          <div class="logos__img">
            <img src="{{ asset('frontend/assets/images/logo4.png')}}" alt="" />
          </div>
        </div>
      </section>

      <!-- client logo section starts -->

<section class="customer-logos slider">
            <div class="slide"><img src="{{ asset('frontend/assets/images/client-logo-1.png')}}" alt=""></div>
            <div class="slide"><img src="{{ asset('frontend/assets/images/client-logo-2.png')}}" alt=""></div>
            <div class="slide"><img src="{{ asset('frontend/assets/images/client-logo-3.png')}}" alt=""></div>
            <div class="slide"><img src="{{ asset('frontend/assets/images/client-logo-4.png')}}" alt=""></div>
            <div class="slide"><img src="{{ asset('frontend/assets/images/client-logo-5.png')}}" alt=""></div>
            <div class="slide"><img src="{{ asset('frontend/assets/images/client-logo-6.png')}}" alt=""></div>
</section>


@endsection

@push('style-alt')

<style>
        .hide {
            display: none;
        }
    </style>

@endpush
@push('script-alt')

<script>
   const hideButton = document.getElementById('hide');
    const alert = document.querySelector('.alert');
    if(hideButton && alert) {
        hideButton.addEventListener('click', () => {
            alert.classList.add('hide');
        })
    }
</script>
    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('frontend/assets/js/scrollreveal.min.js')}}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

@endpush
