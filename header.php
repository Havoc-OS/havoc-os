<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Havoc-OS</title>
    <link rel="icon" href="src/img/favicon.svg">
    <script data-ad-client="ca-pub-2364850514149403" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="src/css/swiper.min.css" />
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="src/css/style.css" />
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <script data-ad-client="ca-pub-2364850514149403" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body style="overflow: visible;">
    <!-- Menu -->
    <div class="main-modal fixed w-full h-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);display:none;">
        <div class="shadow-lg modal-container bg-white w-full h-full md:max-w-md mx-auto z-50 overflow-hidden">
            <div class="modal-content h-full py-4 text-left">
                <!--Body-->
                <div>
                    <span id="date" class="flex items-center px-10 pt-4 text-md text-black font-medium">Sat, Jan 1</span>
                    <div class="flex items-center justify-between px-10 h-16 z-30 text-white">
                        <div class="flex flex-col items-start font-medium">
                            <span class="text-md text-black font-medium" id="time">12:00</span>
                        </div>
                        <div class="flex items-center">
                            <svg id="battery" width="18" height="18" viewBox="0 0 24 24" fill="#000000">
                                <path d="M16,9H8V6H16M16.67,4H15V2H9V4H7.33A1.33,1.33 0 0,0 6,5.33V20.67C6,21.4 6.6,22 7.33,22H16.67A1.33,1.33 0 0,0 18,20.67V5.33C18,4.6 17.4,4 16.67,4Z" />
                            </svg>
                            <div class="text-md text-black font-medium ml-1 mt-0.5" id="percentage">100%</div>
                        </div>
                    </div>
                </div>
                <div class="grid h-16 grid-flow-row grid-cols-2 mx-8">
                    <a onclick="closeNav();" href="/changelog" class="nav-tile flex flex-col justify-center px-2 py-2 m-1 rounded-full">
                        <div class="flex px-2">
                            <svg height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19.07 4.93l-1.41 1.41C19.1 7.79 20 9.79 20 12c0 4.42-3.58 8-8 8s-8-3.58-8-8c0-4.08 3.05-7.44 7-7.93v2.02C8.16 6.57 6 9.03 6 12c0 3.31 2.69 6 6 6s6-2.69 6-6c0-1.66-.67-3.16-1.76-4.24l-1.41 1.41C15.55 9.9 16 10.9 16 12c0 2.21-1.79 4-4 4s-4-1.79-4-4c0-1.86 1.28-3.41 3-3.86v2.14c-.6.35-1 .98-1 1.72 0 1.1.9 2 2 2s2-.9 2-2c0-.74-.4-1.38-1-1.72V2h-1C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-2.76-1.12-5.26-2.93-7.07z" />
                            </svg>
                            <span class="text-md text-white font-medium pl-2">Changelog</span>
                        </div>
                    </a>
                    <a onclick="closeNav();" href="/download" class="nav-tile flex flex-col justify-center px-2 py-2 m-1 rounded-full">
                        <div class="flex px-2">
                            <svg height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff">
                                <path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M17,11l-1.41-1.41L13,12.17V4h-2v8.17L8.41,9.59L7,11l5,5 L17,11z" />
                            </svg>
                            <span class="text-md text-white font-medium pl-2">Download</span>
                        </div>
                    </a>
                </div>
                <div class="grid h-16 grid-flow-row grid-cols-2 mx-8">
                    <a onclick="closeNav();" href="/#screenshots" class="nav-tile flex flex-col justify-center px-2 py-2 m-1 rounded-full">
                        <div class="flex px-2">
                            <svg height="24px" viewBox="0 0 24 24" fill="#ffffff">
                                <path d="M17,1.01L7,1C5.9,1,5,1.9,5,3v18c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2V3C19,1.9,18.1,1.01,17,1.01z M17,21H7v-1h10V21z M17,18H7V6h10V18z M17,4H7V3h10V4z M9.5,8.5H12V7H8v4h1.5V8.5z M12,17h4v-4h-1.5v2.5H12V17z" />
                            </svg>
                            <span class="text-md text-white font-medium pl-2">Screenshots</span>
                        </div>
                    </a>
                    <a onclick="closeNav();" href="/#features" class="nav-tile flex flex-col justify-center px-2 py-2 m-1 rounded-full">
                        <div class="flex px-2">
                            <svg height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff">
                                <path d="M3,11h8V3H3V11z M5,5h4v4H5V5z" />
                                <path d="M13,3v8h8V3H13z M19,9h-4V5h4V9z" />
                                <path d="M3,21h8v-8H3V21z M5,15h4v4H5V15z" />
                                <polygon points="18,13 16,13 16,16 13,16 13,18 16,18 16,21 18,21 18,18 21,18 21,16 18,16" />
                            </svg>
                            <span class="text-md text-white font-medium pl-2">Features</span>
                        </div>
                    </a>
                </div>
                <div class="grid h-16 grid-flow-row grid-cols-2 mx-8">
                    <a onclick="closeNav();" href="/#teams" class="nav-tile flex flex-col justify-center px-2 py-2 m-1 rounded-full">
                        <div class="flex px-2">
                            <svg height="24px" viewBox="0 0 24 24" width="24px" fill="#ffffff">
                                <path d="M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1C4.76,14.04,4.39,14,4,14 c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2 c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85C21.93,14.21,20.99,14,20,14 c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M16.24,13.65c-1.17-0.52-2.61-0.9-4.24-0.9 c-1.63,0-3.07,0.39-4.24,0.9C6.68,14.13,6,15.21,6,16.39V18h12v-1.61C18,15.21,17.32,14.13,16.24,13.65z M8.07,16 c0.09-0.23,0.13-0.39,0.91-0.69c0.97-0.38,1.99-0.56,3.02-0.56s2.05,0.18,3.02,0.56c0.77,0.3,0.81,0.46,0.91,0.69H8.07z M12,8 c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,8,12,8 M12,6c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3s3-1.34,3-3 C15,7.34,13.66,6,12,6L12,6z" />
                            </svg>
                            <span class="text-md text-white font-medium pl-2">Team</span>
                        </div>
                    </a>
                </div>
                <div class="h-full flex items-center p-0 overflow-hidden relative mt-8">
                    <div class="flex h-full min-w-full rounded-t-3xl relative text-center md:text-left" style="background-color: #cce0ff; border-top-left-radius: 2.5rem; border-top-right-radius: 2.5rem;">
                        <div class="w-full fixed md:relative bottom-0">
                            <div class="flex justify-center">
                                <div class="inline-flex items-center rounded-2xl bg-white shadow-lg m-6">
                                    <button type="button" onclick="closeNav();" class="h-14 w-14 p-4 rounded-2xl focus:outline-none">
                                        <svg class="text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate -->
    <div id="donation" class="main-modalx fixed w-full h-11/12 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);display: none;">
        <div class="shadow-lg modal-container bg-blue-100 w-11/12 sm:max-w-lg mx-auto rounded-3xl z-50 overflow-y-auto">
            <div class="modal-content px-6 py-4 text-left">
                <div class="flex justify-between items-center pb-4">
                    <span class="text-4xl font-medium">Support</span>
                    <div onclick="modalClose();" class="modal-close cursor-pointer z-50 py-2">
                        <em class="footer-btn w-10 h-10 center justify-center" aria-hidden="true">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18">
                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                            </svg>
                        </em>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 gap-4">
                    <button onclick="window.open('https://paypal.me/ANUSHEK', '_blank')" class="px-4 py-8 bg-white rounded-3xl w-full my-2">
                        <svg class="w-10 h-10 mt-4 mb-8 mx-auto" xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0px" y="0px" width="25.576353" height="30.177" viewBox="0 0 25.576353 30.177" enable-background="new 0 0 124 33" xml:space="preserve">
                            <path d="m 7.2659888,29.154 0.523,-3.322 -1.165,-0.027 -5.563,0 3.866,-24.513 c 0.012,-0.074 0.051,-0.143 0.108,-0.192 0.057,-0.049 0.13,-0.076 0.206,-0.076 l 9.3800002,0 c 3.114,0 5.263,0.648 6.385,1.927 0.526,0.6 0.861,1.227 1.023,1.917 0.17,0.724 0.173,1.589 0.007,2.644 l -0.012,0.077 0,0.676 0.526,0.298 c 0.443,0.235 0.795,0.504 1.065,0.812 0.45,0.513 0.741,1.165 0.864,1.938 0.127,0.795 0.085,1.741 -0.123,2.812 -0.24,1.232 -0.628,2.305 -1.152,3.183 -0.482,0.809 -1.096,1.48 -1.825,2 -0.696,0.494 -1.523,0.869 -2.458,1.109 -0.906,0.236 -1.939,0.355 -3.072,0.355 l -0.73,0 c -0.522,0 -1.029,0.188 -1.427,0.525 -0.399,0.344 -0.663,0.814 -0.744,1.328 l -0.055,0.299 -0.924,5.855 -0.042,0.215 c -0.011,0.068 -0.03,0.102 -0.058,0.125 -0.025,0.021 -0.061,0.035 -0.096,0.035 l -4.5070002,0 z" style="fill:#253b80" />
                            <path d="m 23.047989,7.667 0,0 0,0 c -0.028,0.179 -0.06,0.362 -0.096,0.55 -1.237,6.351 -5.469,8.545 -10.874,8.545 l -2.7520002,0 c -0.661,0 -1.218,0.48 -1.321,1.132 l 0,0 0,0 -1.409,8.936 -0.399,2.533 c -0.067,0.428 0.263,0.814 0.695,0.814 l 4.8810002,0 c 0.578,0 1.069,-0.42 1.16,-0.99 l 0.048,-0.248 0.919,-5.832 0.059,-0.32 c 0.09,-0.572 0.582,-0.992 1.16,-0.992 l 0.73,0 c 4.729,0 8.431,-1.92 9.513,-7.476 0.452,-2.321 0.218,-4.259 -0.978,-5.622 -0.362,-0.411 -0.811,-0.752 -1.336,-1.03 z" id="path3351" style="fill:#179bd7" />
                            <path d="m 21.753989,7.151 c -0.189,-0.055 -0.384,-0.105 -0.584,-0.15 -0.201,-0.044 -0.407,-0.083 -0.619,-0.117 -0.742,-0.12 -1.555,-0.177 -2.426,-0.177 l -7.352,0 c -0.181,0 -0.353,0.041 -0.507,0.115 C 9.9269888,6.985 9.6749888,7.306 9.6139888,7.699 l -1.564,9.906 -0.045,0.289 c 0.103,-0.652 0.66,-1.132 1.321,-1.132 l 2.7520002,0 c 5.405,0 9.637,-2.195 10.874,-8.545 0.037,-0.188 0.068,-0.371 0.096,-0.55 -0.313,-0.166 -0.652,-0.308 -1.017,-0.429 -0.09,-0.03 -0.183,-0.059 -0.277,-0.087 z" id="path3353" style="fill:#222d65" />
                            <path d="m 9.6139888,7.699 c 0.061,-0.393 0.313,-0.714 0.6520002,-0.876 0.155,-0.074 0.326,-0.115 0.507,-0.115 l 7.352,0 c 0.871,0 1.684,0.057 2.426,0.177 0.212,0.034 0.418,0.073 0.619,0.117 0.2,0.045 0.395,0.095 0.584,0.15 0.094,0.028 0.187,0.057 0.278,0.086 0.365,0.121 0.704,0.264 1.017,0.429 0.368,-2.347 -0.003,-3.945 -1.272,-5.392 C 20.377989,0.682 17.852989,0 14.621989,0 L 5.2419888,0 c -0.66,0 -1.223,0.48 -1.325,1.133 L 0.00998882,25.898 c -0.077,0.49 0.301,0.932 0.795,0.932 l 5.79099998,0 1.454,-9.225 1.564,-9.906 z" style="fill:#253b80" />
                        </svg>
                        <span class="text-sm font-medium mx-auto mt-6 mb-2">paypal.me/ANUSHEK</span>
                    </button>
                    <button onclick="window.open('upi://pay?pa=anushekprasal@okhdfcbank', '_blank')" class="px-4 py-8 bg-white rounded-3xl w-full my-2">
                        <svg class="w-28 h-12 mt-2 mb-8 mx-auto" width="120" height="60" fill-rule="evenodd">
                            <path d="M95.678 42.9L110 29.835l-6.784-13.516z" fill="#097939" />
                            <path d="M90.854 42.9l14.322-13.065-6.784-13.516z" fill="#ed752e" />
                            <path d="M22.41 16.47l-6.03 21.475 21.407.15 5.88-21.625h5.427l-7.05 25.14c-.27.96-1.298 1.74-2.295 1.74H12.31c-1.664 0-2.65-1.3-2.2-2.9l6.724-23.98zm66.182-.15h5.427l-7.538 27.03h-5.58zM49.698 27.582l27.136-.15 1.81-5.707H51.054l1.658-5.256 29.4-.27c1.83-.017 2.92 1.4 2.438 3.167L81.78 29.49c-.483 1.766-2.36 3.197-4.19 3.197H53.316L50.454 43.8h-5.28z" fill="#747474" />
                        </svg>
                        <span class="text-sm font-medium mx-auto mt-6 mb-2">anushekprasal@okhdfcbank</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <section id="nav-bar">
        <header class="top-section">
            <nav class="w-full flex relative justify-between items-center mx-auto sm:px-4 lg:px-8 px-4 h-20" style="background-color: #d7e8ff00;">
                <!-- Home -->
                <a href="/" class="navbar-btn h-14 items-center inline-flex bg-white px-2 lg:px-3 py-3 rounded-2xl hover:bg-blue-300 shadow-lg">
                    <svg width="26" height="26" class="inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="vector">
                        <path d="M 17.49 0.97 C 17.57 1.05 17.64 1.1 17.69 1.16 C 17.979 1.477 18.203 1.847 18.35 2.25 C 18.542 2.775 18.584 3.343 18.47 3.89 C 18.435 4.08 18.385 4.268 18.32 4.45 C 18.226 4.665 18.116 4.872 17.99 5.07 L 17.15 6.41 L 16.46 7.5 L 15.46 9.06 L 14.46 10.7 C 14.21 11.11 13.97 11.52 13.71 11.93 L 12.47 13.93 C 12.23 14.32 11.99 14.73 11.74 15.12 C 11.49 15.51 11.15 16.03 10.85 16.49 L 10.52 16.99 C 10.491 17.033 10.467 17.08 10.45 17.13 C 11.016 17.308 11.607 17.389 12.2 17.37 C 13.216 17.331 14.201 17.008 15.044 16.439 C 15.886 15.871 16.554 15.078 16.97 14.15 C 17.322 13.349 17.469 12.472 17.4 11.6 C 17.33 10.719 17.049 9.869 16.58 9.12 L 18.15 6.62 L 18.64 7.24 C 19.11 7.895 19.481 8.616 19.74 9.38 C 19.93 9.916 20.05 10.474 20.1 11.04 C 20.125 11.536 20.125 12.034 20.1 12.53 C 20.082 13.129 19.978 13.721 19.79 14.29 C 19.649 14.733 19.482 15.167 19.29 15.59 C 19.029 16.138 18.692 16.646 18.29 17.1 C 18.073 17.374 17.839 17.634 17.59 17.88 C 17.052 18.401 16.443 18.842 15.78 19.19 C 15.017 19.598 14.193 19.882 13.34 20.03 C 12.98 20.093 12.615 20.126 12.25 20.13 C 11.823 20.14 11.395 20.124 10.97 20.08 C 10.489 20.02 10.001 20.02 9.52 20.08 C 8.952 20.156 8.391 20.273 7.84 20.43 C 7.322 20.597 6.815 20.794 6.32 21.02 C 5.98 21.17 5.65 21.34 5.32 21.52 C 5.154 21.614 4.994 21.717 4.84 21.83 C 4.71 21.93 4.59 21.94 4.51 21.83 C 4.477 21.791 4.46 21.741 4.46 21.69 C 4.46 21.639 4.477 21.589 4.51 21.55 L 5.41 20.12 L 6.41 18.59 C 6.73 18.1 7.04 17.59 7.35 17.12 L 8.02 15.97 C 8.29 15.54 8.57 15.11 8.84 14.67 C 9.22 14.07 9.6 13.46 9.97 12.85 L 11.63 10.22 C 11.92 9.76 12.23 9.31 12.52 8.84 L 13.41 7.42 C 13.61 7.1 13.83 6.79 14.03 6.48 L 14.66 5.48 L 15.51 4.16 L 16.02 3.33 L 16.53 2.52 C 16.72 2.22 16.91 1.93 17.09 1.63 Z M 7.51 15.02 L 5.97 17.48 C 5.175 16.625 4.586 15.598 4.25 14.48 C 3.909 13.473 3.774 12.408 3.853 11.348 C 3.932 10.288 4.224 9.255 4.71 8.31 C 5.562 6.589 6.999 5.225 8.762 4.463 C 10.525 3.702 12.503 3.591 14.34 4.15 L 12.78 6.64 C 11.747 6.484 10.69 6.638 9.744 7.081 C 8.797 7.524 8.002 8.237 7.46 9.13 C 6.884 10.006 6.58 11.034 6.589 12.083 C 6.598 13.131 6.919 14.154 7.51 15.02 Z" fill="#1a73e8" stroke="#1a73e8" stroke-width="0" />
                    </svg>
                    <span class="inline font-medium pt-0.5 lg:ml-2 lg:mr-1">Havoc-OS</span>
                </a>
                <div class="hidden md:block flex-shrink flex-grow-0 justify-start px-1 lg:px-2">
                    <div class="inline-block">
                        <div class="flex flex-row h-14 items-center lg:mx-8 py-1.5 bg-white rounded-full shadow-lg">
                            <a href="/#screenshots" class="px-2 lg:px-4 py-2 ml-2 lg:mr-1 font-medium transition-colors duration-200 transform rounded-full hover:bg-blue-300">Screenshots</a>
                            <a href="/#features" class="px-2 lg:px-4 py-2 lg:mx-1 font-medium transition-colors duration-200 transform rounded-full hover:bg-blue-300">Features</a>
                            <a href="/#teams" class="px-2 lg:px-4 py-2 lg:mx-1 font-medium transition-colors duration-200 transform rounded-full hover:bg-blue-300">Team</a>
                            <a href="/changelog" class="px-2 lg:px-4 py-2 lg:mx-1 font-medium transition-colors duration-200 transform rounded-full hover:bg-blue-300">Changelog</a>
                            <a href="/download" class="px-2 lg:px-4 py-2 mr-2 lg:ml-1 font-medium transition-colors duration-200 transform rounded-full hover:bg-blue-300">Download</a>
                        </div>
                    </div>
                </div>
                <!-- Donate -->
                <div class="flex-initial">
                    <div class="flex justify-end items-end relative">
                        <div class="flex items-end mr-2 md:mr-0">
                            <div class="block relative">
                                <button type="button" onclick="openModal()" class="navbar-btn h-14 items-center inline-block shadow-lg bg-white px-3 lg:px-4 py-3.5 hover:bg-blue-300 rounded-2xl relative lg:mr-1">
                                    <em style="font-size:1em; color: rgb(0, 0, 0);" class="h-4 fa fa-dollar"></em>
                                    <span class="font-medium lg:ml-2">Support</span>
                                </button>
                                <button type="button" onclick="darkmode()" class="navbar-btn h-14 inline-block shadow-lg bg-white p-4 hover:bg-blue-300 rounded-2xl relative">
                                    <em id="darkic" style="font-size:1.2em; color: rgb(0, 0, 0);" class="fa fa-moon-o"></em>
                                    <style id="dark">
                                    </style>
                                </button>
                            </div>
                        </div>
                        <div class="block md:hidden">
                            <button type="button" onclick="openNav()" class="navbar-btn h-14 items-center inline-block shadow-lg bg-white p-4 rounded-2xl hover:bg-blue-300 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </section>
    <!-- Preloader -->
    <div class="preloader" style="text-align:center;">
        <svg width="200" height="200" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="heart" d="M 17.49 0.97 C 17.57 1.05 17.64 1.1 17.69 1.16 C 17.979 1.477 18.203 1.847 18.35 2.25 C 18.542 2.775 18.584 3.343 18.47 3.89 C 18.435 4.08 18.385 4.268 18.32 4.45 C 18.226 4.665 18.116 4.872 17.99 5.07 L 17.15 6.41 L 16.46 7.5 L 15.46 9.06 L 14.46 10.7 C 14.21 11.11 13.97 11.52 13.71 11.93 L 12.47 13.93 C 12.23 14.32 11.99 14.73 11.74 15.12 C 11.49 15.51 11.15 16.03 10.85 16.49 L 10.52 16.99 C 10.491 17.033 10.467 17.08 10.45 17.13 C 11.016 17.308 11.607 17.389 12.2 17.37 C 13.216 17.331 14.201 17.008 15.044 16.439 C 15.886 15.871 16.554 15.078 16.97 14.15 C 17.322 13.349 17.469 12.472 17.4 11.6 C 17.33 10.719 17.049 9.869 16.58 9.12 L 18.15 6.62 L 18.64 7.24 C 19.11 7.895 19.481 8.616 19.74 9.38 C 19.93 9.916 20.05 10.474 20.1 11.04 C 20.125 11.536 20.125 12.034 20.1 12.53 C 20.082 13.129 19.978 13.721 19.79 14.29 C 19.649 14.733 19.482 15.167 19.29 15.59 C 19.029 16.138 18.692 16.646 18.29 17.1 C 18.073 17.374 17.839 17.634 17.59 17.88 C 17.052 18.401 16.443 18.842 15.78 19.19 C 15.017 19.598 14.193 19.882 13.34 20.03 C 12.98 20.093 12.615 20.126 12.25 20.13 C 11.823 20.14 11.395 20.124 10.97 20.08 C 10.489 20.02 10.001 20.02 9.52 20.08 C 8.952 20.156 8.391 20.273 7.84 20.43 C 7.322 20.597 6.815 20.794 6.32 21.02 C 5.98 21.17 5.65 21.34 5.32 21.52 C 5.154 21.614 4.994 21.717 4.84 21.83 C 4.71 21.93 4.59 21.94 4.51 21.83 C 4.477 21.791 4.46 21.741 4.46 21.69 C 4.46 21.639 4.477 21.589 4.51 21.55 L 5.41 20.12 L 6.41 18.59 C 6.73 18.1 7.04 17.59 7.35 17.12 L 8.02 15.97 C 8.29 15.54 8.57 15.11 8.84 14.67 C 9.22 14.07 9.6 13.46 9.97 12.85 L 11.63 10.22 C 11.92 9.76 12.23 9.31 12.52 8.84 L 13.41 7.42 C 13.61 7.1 13.83 6.79 14.03 6.48 L 14.66 5.48 L 15.51 4.16 L 16.02 3.33 L 16.53 2.52 C 16.72 2.22 16.91 1.93 17.09 1.63 Z M 7.51 15.02 L 5.97 17.48 C 5.175 16.625 4.586 15.598 4.25 14.48 C 3.909 13.473 3.774 12.408 3.853 11.348 C 3.932 10.288 4.224 9.255 4.71 8.31 C 5.562 6.589 6.999 5.225 8.762 4.463 C 10.525 3.702 12.503 3.591 14.34 4.15 L 12.78 6.64 C 11.747 6.484 10.69 6.638 9.744 7.081 C 8.797 7.524 8.002 8.237 7.46 9.13 C 6.884 10.006 6.58 11.034 6.589 12.083 C 6.598 13.131 6.919 14.154 7.51 15.02 Z" fill="#000000" stroke="#000000" stroke-width="0" />
        </svg>
    </div>
</body>