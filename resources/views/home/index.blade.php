@extends('layout.index')

@section('title')
home
@endsection


@section('main')

        <!-- End Navbar -->
    <!-- Start Landing -->
    <section class="landing position-relative">
        <div class="bg-img">
          <img class="mw-100" src="./assets/landing-bg.png" alt="">
          <div class="content">
            <h1 class="mb-4">
              {{ __('lang.Video Sharing Script') }}
            </h1>
            <p class="text-center text-white fs-5">
             {{__('lang.Your videos are stored the safest fastest and earn real money.')}}
            </p>
            <div class="buttons d-flex align-items-center  justify-content-center   gap-2 flex-column flex-lg-row ">
              <a href="#video" class=" btn main-btn popup-vimeo d-flex align-items-start justify-content-center ">
                {{ __('lang.Get start') }}
              </a>
              <a href="#video" class=" btn third-btn popup-vimeo d-flex align-items-start justify-content-center ">
               {{__('lang.Premium plans')}}
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Landing -->
      <!-- Start Features -->
      <section class="features my-5">
        <div class="container">
          <div class="main-head text-center ">
            <h1>
              {{ __('lang.Our features') }}
            </h1>
          </div>
          <div class="row g-3 g-lg-5 px-lg-5">
            <div class="col-lg-4">
              <div class="features-box">
                <div class="features-icon mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="66" height="53">
                    <defs>
                      <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                        <stop offset="0%" stop-color="#EC0043"></stop>
                        <stop offset="100%" stop-color="#EC0083"></stop>
                      </linearGradient>
                    </defs>
                    <path fill="none"
                      d="M49.692 52.959h-31C8.385 52.959 0 44.526 0 34.16c0-8.096 5.182-15.253 12.74-17.805C15.303 7.238 23.473.971 33 .971c11.151 0 20.308 8.754 21.031 19.788C61.058 22.69 66 29.088 66 36.558c0 9.044-7.315 16.401-16.308 16.401ZM33 4.994c-8.041 0-14.887 5.509-16.649 13.399a2.006 2.006 0 0 1-1.437 1.503C8.488 21.616 4 27.482 4 34.16c0 8.148 6.591 14.776 14.692 14.776h31C56.478 48.936 62 43.383 62 36.558c0-6.064-4.317-11.191-10.265-12.192a2.01 2.01 0 0 1-1.669-2.039c.001-.034.008-.162.011-.195 0-9.434-7.661-17.138-17.077-17.138Z">
                    </path>
                    <path fill="url(#a)"
                      d="M49.692 52.959h-31C8.385 52.959 0 44.526 0 34.16c0-8.096 5.182-15.253 12.74-17.805C15.303 7.238 23.473.971 33 .971c11.151 0 20.308 8.754 21.031 19.788C61.058 22.69 66 29.088 66 36.558c0 9.044-7.315 16.401-16.308 16.401ZM33 4.994c-8.041 0-14.887 5.509-16.649 13.399a2.006 2.006 0 0 1-1.437 1.503C8.488 21.616 4 27.482 4 34.16c0 8.148 6.591 14.776 14.692 14.776h31C56.478 48.936 62 43.383 62 36.558c0-6.064-4.317-11.191-10.265-12.192a2.01 2.01 0 0 1-1.669-2.039c.001-.034.008-.162.011-.195 0-9.434-7.661-17.138-17.077-17.138Z">
                    </path>
                  </svg>
                </div>
                <h4 class="mb-4">{{ __('lang.Cloud Storage') }}</h4>
                <p class="text-muted">{{__('lang.Gravida non vel at egestas id. Nisi sagittis, enim eget sit imperdiet at. Urna velit
                  id bibendum tristique non fringilla vitae platea.')}}</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-box">
                <div class="features-icon mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="67" height="66">
                    <defs>
                      <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                        <stop offset="0%" stop-color="#EC0043"></stop>
                        <stop offset="100%" stop-color="#EC0083"></stop>
                      </linearGradient>
                    </defs>
                    <path fill="none"
                      d="M61.203 44.793C55.661 54.93 46.496 62.305 35.395 65.562c-.448.13-.893.253-1.34.369a1.994 1.994 0 0 1-1.005 0C9.93 59.947-4 36.307 1.996 13.236c.117-.448.241-.895.372-1.339a2.007 2.007 0 0 1 2.009-1.43c10.272.47 20.155-3.015 27.85-9.809a2.004 2.004 0 0 1 2.65 0c7.695 6.794 17.606 10.285 27.85 9.809a1.976 1.976 0 0 1 2.01 1.431c3.263 11.077 2.008 22.76-3.534 32.895Zm.102-30.296A43.072 43.072 0 0 1 33.552 4.77c-7.859 6.407-17.57 9.832-27.752 9.727-5.229 20.693 7.153 41.82 27.751 47.439.241-.067.481-.134.72-.204 10.072-2.955 18.392-9.649 23.423-18.85 4.784-8.751 6.048-18.774 3.611-28.385ZM35.552 34.68v6.986a1.998 1.998 0 0 1-2 1.995 1.997 1.997 0 0 1-1.999-1.995V34.68c-2.013-.798-3.443-2.751-3.443-5.04 0-2.994 2.441-5.431 5.442-5.431 3.001 0 5.443 2.437 5.443 5.431 0 2.289-1.431 4.242-3.443 5.04Zm-2-6.481c-.796 0-1.444.647-1.444 1.441a1.444 1.444 0 0 0 2.888 0c0-.794-.648-1.441-1.444-1.441Z">
                    </path>
                    <path fill="url(#a)"
                      d="M61.203 44.793C55.661 54.93 46.496 62.305 35.395 65.562c-.448.13-.893.253-1.34.369a1.994 1.994 0 0 1-1.005 0C9.93 59.947-4 36.307 1.996 13.236c.117-.448.241-.895.372-1.339a2.007 2.007 0 0 1 2.009-1.43c10.272.47 20.155-3.015 27.85-9.809a2.004 2.004 0 0 1 2.65 0c7.695 6.794 17.606 10.285 27.85 9.809a1.976 1.976 0 0 1 2.01 1.431c3.263 11.077 2.008 22.76-3.534 32.895Zm.102-30.296A43.072 43.072 0 0 1 33.552 4.77c-7.859 6.407-17.57 9.832-27.752 9.727-5.229 20.693 7.153 41.82 27.751 47.439.241-.067.481-.134.72-.204 10.072-2.955 18.392-9.649 23.423-18.85 4.784-8.751 6.048-18.774 3.611-28.385ZM35.552 34.68v6.986a1.998 1.998 0 0 1-2 1.995 1.997 1.997 0 0 1-1.999-1.995V34.68c-2.013-.798-3.443-2.751-3.443-5.04 0-2.994 2.441-5.431 5.442-5.431 3.001 0 5.443 2.437 5.443 5.431 0 2.289-1.431 4.242-3.443 5.04Zm-2-6.481c-.796 0-1.444.647-1.444 1.441a1.444 1.444 0 0 0 2.888 0c0-.794-.648-1.441-1.444-1.441Z">
                    </path>
                  </svg>
                </div>
                <h4 class="mb-4">{{ __('lang.Secure') }}</h4>
                <p class="text-muted">{{__('lang.Gravida non vel at egestas id. Nisi sagittis, enim eget sit imperdiet at. Urna velit
                  id bibendum tristique non fringilla vitae platea.')}}</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-box">
                <div class="features-icon mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="66" height="60">
                    <defs>
                      <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                        <stop offset="0%" stop-color="#EC0043"></stop>
                        <stop offset="100%" stop-color="#EC0083"></stop>
                      </linearGradient>
                    </defs>
                    <path fill="none"
                      d="M55.143 44.562H10.857C4.87 44.562 0 39.719 0 33.768V11.754C0 5.802 4.87.96 10.857.96h44.286C61.129.96 66 5.802 66 11.754v22.014c0 5.951-4.871 10.794-10.857 10.794ZM62 11.754c0-3.759-3.076-6.817-6.857-6.817H10.857C7.076 4.937 4 7.995 4 11.754v22.014c0 3.759 3.076 6.817 6.857 6.817h44.286c3.781 0 6.857-3.058 6.857-6.817V11.754ZM41.859 26.176l-11.152 6.655c-.595.397-1.319.6-2.07.6-.687 0-1.396-.17-2.051-.519-1.375-.732-2.229-2.091-2.229-3.547V16.156c0-1.628.953-3.124 2.426-3.81 1.346-.626 2.874-.466 4.035.411l10.961 6.538c1.262.834 1.967 2.111 1.967 3.466s-.705 2.632-1.887 3.415Zm-2.218-3.522L28.65 16.101a1.94 1.94 0 0 1-.199-.136.224.224 0 0 0-.094.191v13.209c.024.002.174.09.265.086l11.099-6.634a.336.336 0 0 0 .025-.057c-.001-.008-.022-.051-.105-.106ZM4.214 51.592h7.208c.846-2.547 3.236-4.403 6.078-4.403s5.232 1.856 6.078 4.403h38.208c1.105 0 2 .89 2 1.988a1.995 1.995 0 0 1-2 1.989H23.578c-.846 2.547-3.236 4.403-6.078 4.403s-5.232-1.856-6.078-4.403H4.214c-1.104 0-2-.891-2-1.989s.896-1.988 2-1.988ZM17.5 55.995a2.425 2.425 0 0 0 2.429-2.415 2.425 2.425 0 0 0-2.429-2.414 2.425 2.425 0 0 0-2.429 2.414 2.425 2.425 0 0 0 2.429 2.415Z">
                    </path>
                    <path fill="url(#a)"
                      d="M55.143 44.562H10.857C4.87 44.562 0 39.719 0 33.768V11.754C0 5.802 4.87.96 10.857.96h44.286C61.129.96 66 5.802 66 11.754v22.014c0 5.951-4.871 10.794-10.857 10.794ZM62 11.754c0-3.759-3.076-6.817-6.857-6.817H10.857C7.076 4.937 4 7.995 4 11.754v22.014c0 3.759 3.076 6.817 6.857 6.817h44.286c3.781 0 6.857-3.058 6.857-6.817V11.754ZM41.859 26.176l-11.152 6.655c-.595.397-1.319.6-2.07.6-.687 0-1.396-.17-2.051-.519-1.375-.732-2.229-2.091-2.229-3.547V16.156c0-1.628.953-3.124 2.426-3.81 1.346-.626 2.874-.466 4.035.411l10.961 6.538c1.262.834 1.967 2.111 1.967 3.466s-.705 2.632-1.887 3.415Zm-2.218-3.522L28.65 16.101a1.94 1.94 0 0 1-.199-.136.224.224 0 0 0-.094.191v13.209c.024.002.174.09.265.086l11.099-6.634a.336.336 0 0 0 .025-.057c-.001-.008-.022-.051-.105-.106ZM4.214 51.592h7.208c.846-2.547 3.236-4.403 6.078-4.403s5.232 1.856 6.078 4.403h38.208c1.105 0 2 .89 2 1.988a1.995 1.995 0 0 1-2 1.989H23.578c-.846 2.547-3.236 4.403-6.078 4.403s-5.232-1.856-6.078-4.403H4.214c-1.104 0-2-.891-2-1.989s.896-1.988 2-1.988ZM17.5 55.995a2.425 2.425 0 0 0 2.429-2.415 2.425 2.425 0 0 0-2.429-2.414 2.425 2.425 0 0 0-2.429 2.414 2.425 2.425 0 0 0 2.429 2.415Z">
                    </path>
                  </svg>
                </div>
                <h4 class="mb-4">{{ __('lang.Streaming') }}</h4>
                <p class="text-muted">{{__('lang.Gravida non vel at egestas id. Nisi sagittis, enim eget sit imperdiet at. Urna velit
                  id bibendum tristique non fringilla vitae platea.')}}</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-box">
                <div class="features-icon mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="52" height="66">
                    <defs>
                      <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                        <stop offset="0%" stop-color="#EC0043"></stop>
                        <stop offset="100%" stop-color="#EC0083"></stop>
                      </linearGradient>
                    </defs>
                    <path fill="none"
                      d="M22.543 65.993a1.994 1.994 0 0 1-1.982-1.995V41.941H2.055a1.98 1.98 0 0 1-1.767-1.09 2.004 2.004 0 0 1 .163-2.079L27.769.977a1.98 1.98 0 0 1 3.586 1.174v22.056h18.506c.746 0 1.428.421 1.767 1.09a2.004 2.004 0 0 1-.164 2.079L24.147 65.172a1.983 1.983 0 0 1-1.604.821ZM5.949 37.951h16.594c1.095 0 1.983.893 1.983 1.995v17.916l21.441-29.664H29.372a1.99 1.99 0 0 1-1.982-1.996V8.286L5.949 37.951Z">
                    </path>
                    <path fill="url(#a)"
                      d="M22.543 65.993a1.994 1.994 0 0 1-1.982-1.995V41.941H2.055a1.98 1.98 0 0 1-1.767-1.09 2.004 2.004 0 0 1 .163-2.079L27.769.977a1.98 1.98 0 0 1 3.586 1.174v22.056h18.506c.746 0 1.428.421 1.767 1.09a2.004 2.004 0 0 1-.164 2.079L24.147 65.172a1.983 1.983 0 0 1-1.604.821ZM5.949 37.951h16.594c1.095 0 1.983.893 1.983 1.995v17.916l21.441-29.664H29.372a1.99 1.99 0 0 1-1.982-1.996V8.286L5.949 37.951Z">
                    </path>
                  </svg>
                </div>
                <h4 class="mb-4">{{ __('lang.Speed') }}</h4>
                <p class="text-muted">{{__('lang.Gravida non vel at egestas id. Nisi sagittis, enim eget sit imperdiet at. Urna velit
                  id bibendum tristique non fringilla vitae platea.')}}</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-box">
                <div class="features-icon mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66">
                    <defs>
                      <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                        <stop offset="0%" stop-color="#EC0043"></stop>
                        <stop offset="100%" stop-color="#EC0083"></stop>
                      </linearGradient>
                    </defs>
                    <path fill="none"
                      d="M56.334 56.334C50.102 62.567 41.814 66 33 66s-17.102-3.433-23.335-9.666C3.433 50.102 0 41.814 0 33c0-8.815 3.433-17.102 9.665-23.335C15.898 3.433 24.186 0 33 0s17.102 3.433 23.334 9.665C62.567 15.898 66 24.185 66 33c0 8.814-3.433 17.102-9.666 23.334ZM33 62c7.074 0 13.744-2.541 19.023-7.149L41.658 44.486A14.362 14.362 0 0 1 33 47.393a14.36 14.36 0 0 1-8.658-2.907L13.977 54.851C19.256 59.459 25.926 62 33 62ZM22.6 33c0 2.778 1.082 5.39 3.046 7.354 4.055 4.054 10.652 4.054 14.708 0 4.055-4.055 4.055-10.653 0-14.708A10.33 10.33 0 0 0 33 22.599a10.33 10.33 0 0 0-7.354 3.047A10.333 10.333 0 0 0 22.6 33ZM4 33c0 7.074 2.541 13.744 7.149 19.023l10.363-10.364A14.274 14.274 0 0 1 18.6 33c0-3.171 1.032-6.176 2.912-8.66L11.149 13.976C6.541 19.255 4 25.926 4 33ZM33 4c-7.074 0-13.744 2.54-19.023 7.148L24.34 21.512A14.286 14.286 0 0 1 33 18.599c3.17 0 6.175 1.032 8.659 2.913l10.364-10.364C46.744 6.54 40.074 4 33 4Zm21.851 9.977L44.486 24.341c3.856 5.11 3.855 12.209.002 17.318l10.363 10.364C59.459 46.744 62 40.074 62 33s-2.541-13.744-7.149-19.023Z">
                    </path>
                    <path fill="url(#a)"
                      d="M56.334 56.334C50.102 62.567 41.814 66 33 66s-17.102-3.433-23.335-9.666C3.433 50.102 0 41.814 0 33c0-8.815 3.433-17.102 9.665-23.335C15.898 3.433 24.186 0 33 0s17.102 3.433 23.334 9.665C62.567 15.898 66 24.185 66 33c0 8.814-3.433 17.102-9.666 23.334ZM33 62c7.074 0 13.744-2.541 19.023-7.149L41.658 44.486A14.362 14.362 0 0 1 33 47.393a14.36 14.36 0 0 1-8.658-2.907L13.977 54.851C19.256 59.459 25.926 62 33 62ZM22.6 33c0 2.778 1.082 5.39 3.046 7.354 4.055 4.054 10.652 4.054 14.708 0 4.055-4.055 4.055-10.653 0-14.708A10.33 10.33 0 0 0 33 22.599a10.33 10.33 0 0 0-7.354 3.047A10.333 10.333 0 0 0 22.6 33ZM4 33c0 7.074 2.541 13.744 7.149 19.023l10.363-10.364A14.274 14.274 0 0 1 18.6 33c0-3.171 1.032-6.176 2.912-8.66L11.149 13.976C6.541 19.255 4 25.926 4 33ZM33 4c-7.074 0-13.744 2.54-19.023 7.148L24.34 21.512A14.286 14.286 0 0 1 33 18.599c3.17 0 6.175 1.032 8.659 2.913l10.364-10.364C46.744 6.54 40.074 4 33 4Zm21.851 9.977L44.486 24.341c3.856 5.11 3.855 12.209.002 17.318l10.363 10.364C59.459 46.744 62 40.074 62 33s-2.541-13.744-7.149-19.023Z">
                    </path>
                  </svg>
                </div>
                <h4 class="mb-4">{{ __('lang.Support') }} 24/7</h4>
                <p class="text-muted">{{__('lang.Gravida non vel at egestas id. Nisi sagittis, enim eget sit imperdiet at. Urna velit
                  id bibendum tristique non fringilla vitae platea.')}}</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-box">
                <div class="features-icon mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66">
                    <defs>
                      <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                        <stop offset="0%" stop-color="#EC0043"></stop>
                        <stop offset="100%" stop-color="#EC0083"></stop>
                      </linearGradient>
                    </defs>
                    <path fill="none"
                      d="M64 66a2 2 0 0 1-2-2V33a2 2 0 1 1 4 0v31a2 2 0 0 1-2 2Zm-13.777 0a2 2 0 0 1-2-2V39.889a2 2 0 1 1 4 0V64a2 2 0 0 1-2 2Zm-13.779 0a2 2 0 0 1-2-2V36.444a2 2 0 0 1 4 0V64a2 2 0 0 1-2 2ZM15.778 31.556C7.078 31.556 0 24.477 0 15.778 0 7.078 7.078 0 15.778 0s15.778 7.078 15.778 15.778c0 8.699-7.078 15.778-15.778 15.778Zm2-27.373v9.595h9.595a11.791 11.791 0 0 0-9.595-9.595Zm-2 13.595a2 2 0 0 1-2-2V4.183C8.235 5.137 4 9.967 4 15.778c0 6.494 5.284 11.778 11.778 11.778 5.811 0 10.64-4.235 11.595-9.778H15.778Zm6.888 30.445a2 2 0 0 1 2 2V64a2 2 0 0 1-4 0V50.223a2 2 0 0 1 2-2Z">
                    </path>
                    <path fill="url(#a)"
                      d="M64 66a2 2 0 0 1-2-2V33a2 2 0 1 1 4 0v31a2 2 0 0 1-2 2Zm-13.777 0a2 2 0 0 1-2-2V39.889a2 2 0 1 1 4 0V64a2 2 0 0 1-2 2Zm-13.779 0a2 2 0 0 1-2-2V36.444a2 2 0 0 1 4 0V64a2 2 0 0 1-2 2ZM15.778 31.556C7.078 31.556 0 24.477 0 15.778 0 7.078 7.078 0 15.778 0s15.778 7.078 15.778 15.778c0 8.699-7.078 15.778-15.778 15.778Zm2-27.373v9.595h9.595a11.791 11.791 0 0 0-9.595-9.595Zm-2 13.595a2 2 0 0 1-2-2V4.183C8.235 5.137 4 9.967 4 15.778c0 6.494 5.284 11.778 11.778 11.778 5.811 0 10.64-4.235 11.595-9.778H15.778Zm6.888 30.445a2 2 0 0 1 2 2V64a2 2 0 0 1-4 0V50.223a2 2 0 0 1 2-2Z">
                    </path>
                  </svg>
                </div>
                <h4 class="mb-4">{{ __('lang.Extensive statistics') }}</h4>
                <p class="text-muted">{{__('lang.Gravida non vel at egestas id. Nisi sagittis, enim eget sit imperdiet at. Urna velit
                  id bibendum tristique non fringilla vitae platea.')}}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Features -->
      <!-- Start Video Section -->
      <section class="video-section py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mb-4 d-flex align-items-center  justify-content-center ">
              <picture>
                <img src="./assets/image-sharing.svg" class=" mw-100" alt="">
              </picture>
            </div>
            <div class="col-lg-8 d-flex align-items-start flex-column justify-content-center">
              <h3 class="h1 mb-4">{{ __('lang.Sharing videos') }}</h3>
              <div class="mb-5">
                <p>
                  {{ __('lang.Quickly upload any file type and share it with Xvideosharing.') }}
                </p>
              </div>
              <div class="btn main-btn px-5">{{ __('lang.Register') }}</div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Video Section -->
      <!-- Start Know Section -->
      <section class="know-section py-5">
        <div class="container">
          <div class="main-head text-center ">
            <h1>
              {{ __('lang.Need to know') }}
            </h1>
          </div>
          <div class="row">
            <div class="col-lg-6 mb-2">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">

                      {{ __('lang.What is') }} XVideoSharing?

                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">XVideoSharing {{__('lang.is a video hosting provider. We offer online storage,
                      sophisticated uploading and video streaming tools.')}} {{__('lang.With XVideoSharing you can host your videos and
                      play them online from browser / mobile devices.')}}
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">

                     {{__('lang. Why should I use')}} XVideoSharing?

                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{ __('lang.Whenever you need to share a video,') }} XVideoSharing {{__('lang.can help.
                      We optimize quality / size of your videos and make them playable in web player. So you can start
                      watching video quickly without downloading whole file.')}}</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      {{ __('lang.Can I search for files other people uploaded?') }}
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{ __('lang.Yes, you can Search for other video files that were marked as Public.') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="accordion accordion-flush" id="accordionFlushExampleOne">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">

                      {{ __('lang.what kind of files can be uploaded') }}

                    </button>
                  </h2>
                  <div id="flush-collapseFour" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExampleOne">
                    <div class="accordion-body">A{{__('lang.ll video format files.
                      The only restrictions are for copyrighted material, pornography, nudity and any kind offensive
                      material.
                      Please refer to our TOS for more info on XVideoSharing terms of service')}}</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">

                      {{ __('lang.How to delete afile i uploaded?') }}

                    </button>
                  </h2>
                  <div id="flush-collapseFive" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExampleOne">
                    <div class="accordion-body">{{('lang.To delete a file you uploaded you can use Delete Link that was provided to
                      you after the upload proccess or delete it from My Videos page.')}}</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">

                     {{__('lang.Can i hotlink the stuff i upload?')}}

                    </button>
                  </h2>
                  <div id="flush-collapseSix" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExampleOne">
                    <div class="accordion-body">{{__('lang.No. Hotlinking is not allowed on any kind of files uploaded to our
                      servers.')}}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Know Section -->
      <!-- Start Video Section -->
      <section class="video-section py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 d-flex align-items-start flex-column justify-content-center">
              <h3 class="h1 mb-4">{{ __('lang.Earn money') }}
              </h3>
              <div class="mb-5">
                <p class="fw-bold m-0">
                 {{__('lang.Earn a fixed amount per 10,000 downloads or streams.')}}
                </p>
                <p class="m-0">
                  {{ __('lang.The payment amount is defined by the origin country referred to in the Level table / Worldmap below.') }}
                </p>
              </div>
              <div class="btn main-btn px-5">{{ __('lang.Details') }}</div>
            </div>
            <div class="col-lg-4 mb-4 d-flex align-items-center  justify-content-center ">
              <picture>
                <img src="./assets/image-earn.svg" class=" mw-100" alt="">
              </picture>
            </div>

          </div>
        </div>
      </section>
      <!-- End Video Section -->




@endsection
