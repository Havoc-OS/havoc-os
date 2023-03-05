<!-- Header -->
<?php include "header.php"; ?>

<!-- Content -->
<div class="min-h-screen">
    <div class="flex justify-center">
        <header class="md:w-8/12 sm:w-full mx-4 my-8 bg-white dark:bg-gray-700 items-center h-14 rounded-full">
            <div class="relative flex flex-col justify-center h-full px-3 flex-center">
                <div class="relative items-center flex w-full">
                    <div class="container relative left-0 flex w-full h-auto h-full">
                        <div class="relative flex items-center w-full h-full group">
                            <svg class="left-0 w-5 h-5 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                            </svg>
                            <input id="searchbar" onkeyup="search_device()" type="text" class="w-full py-2 pr-4 ml-4 bg-white text-md" style="border-right: 1px solid lightgray;" placeholder="Search" />
                        </div>
                    </div>
                    <button onclick="getall()" class="relative py-2 mx-2 flex rounded-xl hover:bg-blue-50">
                        <span class="ml-4 mr-10 text-md text-gray-500">Devices</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" height="24px" viewBox="0 0 24 24" width="24px" fill="#1a73e8">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10l5 5 5-5z" />
                        </svg>
                        <div id="navxx" class="absolute right-0 z-20 w-36 h-72 mt-12 overflow-x-hidden overflow-y-auto bg-white rounded-xl shadow-xl dark:bg-gray-700" style="display: none;"></div>
                        <script>
                            function getall() {
                                if (document.getElementById("navxx").style.display === "none") {
                                    document.getElementById("navxx").style.display = "";
                                } else {
                                    document.getElementById("navxx").style.display = "none";
                                }
                            }
                        </script>
                    </button>
                </div>
            </div>
        </header>
    </div>
    <!-- Devices -->
    <div id="devices" class="mb-10"></div>
</div>

<!-- Scripts -->
<script src="src/js/download.js"></script>

<!-- Footer -->
<?php include "footer.php"; ?>
