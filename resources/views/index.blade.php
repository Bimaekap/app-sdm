<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="{assets/css/styles.css}">
   @vite('resources/css/styles.css')
   @vite('resources/scss/styles.scss')


   <title>SDM</title>
</head>

<body>
   <!--=============== LOGIN IMAGE ===============-->
   <svg class="login__blob" viewBox="0 0 566 840" xmlns="http://www.w3.org/2000/svg">
      <mask id="mask0" mask-type="alpha">
         <path d="M342.407 73.6315C388.53 56.4007 394.378 17.3643 391.538 
            0H566V840H0C14.5385 834.991 100.266 804.436 77.2046 707.263C49.6393 
            591.11 115.306 518.927 176.468 488.873C363.385 397.026 156.98 302.824 
            167.945 179.32C173.46 117.209 284.755 95.1699 342.407 73.6315Z" />
      </mask>

      <g mask="url(#mask0)">
         <path d="M342.407 73.6315C388.53 56.4007 394.378 17.3643 391.538 
            0H566V840H0C14.5385 834.991 100.266 804.436 77.2046 707.263C49.6393 
            591.11 115.306 518.927 176.468 488.873C363.385 397.026 156.98 302.824 
            167.945 179.32C173.46 117.209 284.755 95.1699 342.407 73.6315Z" />

         <!-- Insert your image (recommended size: 1000 x 1200) -->
         <image class="login__img" href="{{ asset('img/bg-img.jpg') }}" />
      </g>
   </svg>
   <!--=============== LOGIN ===============-->
   <div class="login container grid" id="loginAccessRegister">
      <!--===== LOGIN ACCESS =====-->
      <div class="login__access">
         <h1 class="login__title">Log in to your account.</h1>

         <div class="login__area">
            {{-- #NOTE: Route Login --}}
            <form action="{{ route('post.login') }}" method="POST" class="login__form">
               @csrf
               @method('POST')
               <div class="login__content grid">
                  <div class="login__box">
                     <input type="email" name="email" value="bimaeka2000@gmail.com" id="email" required placeholder=" "
                        class="login__input">
                     <label for="email" class="login__label">Email</label>

                     <i class="ri-mail-fill login__icon"></i>
                  </div>

                  <div class="login__box">
                     <input type="password" name="password" value="password" id="password" required placeholder=" "
                        class="login__input">
                     <label for="password" class="login__label">Password</label>

                     <i class="ri-eye-off-fill login__icon login__password" id="loginPassword"></i>
                  </div>
               </div>
               @if(Session::has('login'))
               {{-- <span class="alert alert-info text-red-50">{{ Session::get('login') }}</span> --}}
               <div x-data="{ alertIsVisible: true }" x-show="alertIsVisible"
                  class="relative w-full overflow-hidden rounded-md border border-red-500 bg-white text-neutral-600 dark:bg-neutral-950 dark:text-neutral-300"
                  role="alert" x-transition:leave="transition ease-in duration-300"
                  x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                  <div class="flex w-full items-center gap-2 bg-red-500/10 p-4">
                     <div class="bg-red-500/15 text-red-500 rounded-full p-1" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6"
                           aria-hidden="true">
                           <path fill-rule="evenodd"
                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z"
                              clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="ml-2">
                        <h3 class="text-sm font-semibold text-red-500">Invalid Email Address</h3>
                        <p class="text-xs font-medium sm:text-sm">{{ Session::get('login') }}
                        </p>
                     </div>
                     <button type="button" @click="alertIsVisible = false" class="ml-auto" aria-label="dismiss alert">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                           stroke="currentColor" fill="none" stroke-width="2.5" class="w-4 h-4 shrink-0">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                     </button>
                  </div>
               </div>
               @endif
               {{-- #TODO: Perbaiki link forget password jika dibutuhkan --}}
               <a href=" #" class="login__forgot">Forgot your password?</a>

               <button type="submit" class="login__button">Login</button>
            </form>

            <div class="login__social">
               <p class="login__social-title">Or login with</p>

               <div class="login__social-links">
                  <a href="#" class="login__social-link">
                     <img src="{{ asset('img/icon-google.svg') }}" alt="image" class="login__social-img">
                  </a>

                  <a href="#" class="login__social-link">
                     <img src="{{ asset('img/icon-facebook.svg') }}" alt="image" class="login__social-img">
                  </a>

                  <a href="#" class="login__social-link">
                     <img src="{{ asset('img/icon-apple.svg') }}" alt="image" class="login__social-img">
                  </a>
               </div>
            </div>

            <p class="login__switch">
               Don't have an account?
               <button id="loginButtonRegister">Create Account</button>
            </p>
         </div>
      </div>

      <!--===== LOGIN REGISTER =====-->
      <div class="login__register">
         <h1 class="login__title">Create new account.</h1>

         <div class="login__area">
            <form action="" class="login__form">
               <div class="login__content grid">
                  <div class="login__group grid">
                     <div class="login__box">
                        <input type="text" id="names" required placeholder=" " class="login__input">
                        <label for="names" class="login__label">Names</label>

                        <i class="ri-id-card-fill login__icon"></i>
                     </div>

                     <div class="login__box">
                        <input type="text" id="surnames" required placeholder=" " class="login__input">
                        <label for="surnames" class="login__label">Surnames</label>

                        <i class="ri-id-card-fill login__icon"></i>
                     </div>
                  </div>

                  <div class="login__box">
                     <input type="email" id="emailCreate" required placeholder=" " class="login__input">
                     <label for="emailCreate" class="login__label">Email</label>

                     <i class="ri-mail-fill login__icon"></i>
                  </div>

                  <div class="login__box">
                     <input type="password" id="passwordCreate" required placeholder=" " class="login__input">
                     <label for="passwordCreate" class="login__label">Password</label>

                     <i class="ri-eye-off-fill login__icon login__password" id="loginPasswordCreate"></i>
                  </div>
               </div>

               <button type="submit" class="login__button">Create account</button>
            </form>

            <p class="login__switch">
               Already have an account?
               <button id="loginButtonAccess">Log In</button>
            </p>
         </div>
      </div>
   </div>

   <!--=============== MAIN JS ===============-->
   @vite('resources/css/main.js')

</body>

</html>