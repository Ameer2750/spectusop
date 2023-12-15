<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- tailwind  -->
    <script src="https://cdn.tailwindcss.com"></script>


    <!--font poppins  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!--icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    <!-- faicons -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />





</head>
<style>
    .material-symbols-outlined {
        font-variation-settings:
            'FILL' 0,
            'wght' 600,
            'GRAD' 0,
            'opsz' 24
    }

    * {
        font-family: 'Poppins', sans-serif;

    }
</style>

<body>
    <section>

        <!-- hero section -->
        <div class="bg-[#cbffda]">
            <div class="mx-14 flex flex-col gap-10 mb-6">
                <x-header />

                <div class="flex flex-col mt-14  text-[#091036] ">
                    <div class="flex flex-row">
                        <h1 class="text-[5rem] ml-14   ">
                            THE CATALYST
                        </h1>

                        <img class=" mt-5 w-20 h-20 " src="{{asset('images\rocket.webp')}}" alt="">

                    </div>
                    <h1 class="text-[5rem] text-center -mt-6">
                        FOR
                        <b>INNOVATION</b>
                    </h1>
                </div>

                <div class="flex flex-row justify-between gap-10 pb-14 mt-6">

                    <div class="flex self-end justify-center w-[50%] ">
                        <button class="px-8 py-3 rounded-lg bg-[#082b3f] text-white text-2xl font-semibold">
                            <span>Let&apos;s Talk</span>
                            <span class="material-symbols-outlined ">
                                arrow_forward
                            </span>
                        </button>
                    </div>



                    <div class="w-[50%]">

                        <p class="text-lg">
                            Not just your Tech Partners. We are the invisible force behind your groundbreaking ideas,
                            and we
                            ensure your ideas thrive to see the light of day.

                        </p>

                        <p class="text-lg">
                            Got a Business Idea? We&apos;ll Tech it from here.
                        </p>

                    </div>


                </div>
            </div>
        </div>



        <!-- Expand Your Reach Without Stretching -->

        <div class="py-10 flex flex-col justify-center items-center gap-5">
            <div class="flex flex-col gap-2 justify-center items-center">
                <!-- row-1 -->

                <h1 class="text-[2.5rem]">
                    Expand Your Reach Without Stretching

                </h1>

                <!-- row-2 -->
                <h1 class="text-[2.5rem] font-semibold">
                    Your Budget

                </h1>

                <!-- row-3 -->
                <p class="text-lg">
                    Experience first-hand how the synergy of Offshore and Onshore teams is a winning combination!

                </p>
            </div>

            <!-- row 4 -->
            <div class="flex flex-row">
                <div class=" flex justify-center items-center bg-[#d2cbff] w-[50%] h-[200px]	">
                    <img src="{{asset('images/bar-chart-fill.svg')}}" alt="bar-chart">

                </div>

                <div>
                    <h2>
                        Cost Savings

                    </h2>
                    <p>
                        Our team of experienced developers can deliver high-quality work at a fraction of the cost of
                        Onshore developers.

                    </p>
                </div>


            </div>

            <!-- row 5-->
            <div class="flex flex-row">

                <div>
                    <h2>
                        24/7 Productivity

                    </h2>
                    <p>
                        Accelerate project timelines by up to 50% with our 24/7 development cycle.

                    </p>
                </div>

                <div class=" flex justify-center items-center bg-[#ffcbe7] w-[50%] h-[200px]	">
                    <img src="{{asset('images/up-arrow.svg')}}" alt="bar-chart">

                </div>


            </div>


            <!-- row 6-->
            <div class="flex flex-row">
                <div class=" flex justify-center items-center bg-[#cbffd9] w-[50%] h-[200px]	">
                    <img src="{{asset('images/square.svg')}}" alt="bar-chart">

                </div>

                <div>
                    <h2>
                        Enhanced Flexibility

                    </h2>
                    <p>
                        Offshore teams enable you to scale up or down quickly to meet changing project needs.

                    </p>
                </div>


            </div>









        </div>











    </section>

    <x-footer />
</body>

</html>