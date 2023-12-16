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

                <div class="flex flex-row justify-between gap-2 pb-14 mt-6">

                    <div class="flex self-end justify-center w-[50%] ">
                        <button class="px-8 py-3 rounded-lg bg-[#082b3f] text-white text-2xl font-semibold">
                            <span class="ml-3">Let&apos;s Talk</span>
                            <span class="material-symbols-outlined ">
                                arrow_forward
                            </span>
                        </button>
                    </div>



                    <div class="flex flex-col gap-2 w-[50%] ">

                        <p class="mb-5 text-xl">
                            Not just your Tech Partners. We are the invisible force behind your groundbreaking ideas,
                            and we
                            ensure your ideas thrive to see the light of day.

                        </p>

                        <p class="text-xl mb-5">
                            Got a Business Idea? We&apos;ll Tech it from here.
                        </p>

                    </div>


                </div>
            </div>
        </div>



        <!-- Expand Your Reach Without Stretching -->

        <div class="py-10 flex flex-col justify-center items-center gap-14">
            <div class="flex flex-col gap-1 justify-center items-center">
                <!-- row-1 -->

                <h1 class="text-[2.7rem]">
                    Expand Your Reach Without Stretching

                </h1>

                <!-- row-2 -->
                <h1 class="text-[2.5rem] font-semibold">
                    Your Budget

                </h1>

                <!-- row-3 -->
                <p class="text-xl">
                    Experience first-hand how the synergy of Offshore and Onshore teams is a winning combination!

                </p>
            </div>

            <div class="flex flex-col justify-center items-center gap-5">
                <!-- row 4 -->
                <div class="flex flex-row gap-3 w-[65%] ">
                    <div class=" flex justify-center items-center bg-[#d2cbff] w-[50%] h-[210px] ">
                        <img src="{{asset('images/bar-chart-fill.svg')}}" alt="bar-chart">

                    </div>

                    <div class="flex flex-col justify-center  w-[50%] ">
                        <h2 class=" text-2xl ">
                            Cost <b>Savings</b>

                        </h2>
                        <p class=" text-xl ">
                            Our team of experienced developers can deliver high-quality work at a fraction of the cost
                            of
                            Onshore developers.

                        </p>
                    </div>


                </div>

                <!-- row 5-->
                <div class="flex flex-row gap-3 w-[65%] ">
                    <div class="flex flex-col justify-center  w-[50%] text-right ">
                        <h2 class=" text-2xl ">
                            24/7 <b>Productivity</b>

                        </h2>
                        <p class=" text-xl ">
                            Accelerate project timelines by up to 50% with our 24/7 development cycle.

                        </p>
                    </div>

                    <div class=" flex justify-center items-center bg-[#ffcbe7] w-[50%] h-[210px]	">
                        <img src="{{asset('images/up-arrow.svg')}}" alt="up-arrow">

                    </div>


                </div>


                <!-- row 6-->
                <div class="flex flex-row gap-3 w-[65%] ">
                    <div class=" flex justify-center items-center bg-[#cbffd9] w-[50%] h-[210px]	">
                        <img src="{{asset('images/square.svg')}}" alt="square">

                    </div>

                    <div class="flex flex-col justify-center  w-[50%] ">
                        <h2 class=" text-2xl ">
                            Enhanced <b>Flexibility</b>

                        </h2>
                        <p class=" text-xl ">
                            Offshore teams enable you to scale up or down quickly to meet changing project needs.

                        </p>
                    </div>


                </div>
            </div>

        </div>
        <!-- perks of works -->

        <div class="py-10 flex flex-col justify-center items-center gap-14 bg-[#091036] text-white mb-4">
            <div class="flex flex-col gap-1 justify-center items-center">
                <div>
                    <h1 class="text-[2.7rem]">Perks Of Working<b> With Us</b></h1>
                </div>





                <div class="flex flex-row justify-between gap-4 mx-[7rem] py-5">

                    <!-- 1st box -->

                    <div class="flex flex-col gap-[5rem] bg-[#313656]  pt-4 pb-6 px-3">
                        <div>
                            <img src="{{asset('images\nem-xem.svg')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-4 mx-2">

                            <div>
                                <p class="text-[1.2rem]">
                                    01.
                                </p>

                                <h4 class="text-[#fff0cb] text-[1.75rem] font-semibold">
                                    Unparalleled
                                </h4>

                                <h4 class="text-[1.75rem]">
                                    Expertise


                                </h4>
                            </div>

                            <hr>

                            <p class="text-lg">
                                Our team of professionals have successfully navigated complex tech landscapes throughout
                                their careers.

                            </p>
                        </div>

                    </div>

                    <!-- 2nd box -->



                    <div class="flex flex-col gap-[5rem] bg-[#313656]  pt-4 pb-6 px-3">
                        <div>
                            <img src="{{asset('images\dash-dash.svg')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-4 mx-2">

                            <div>
                                <p class="text-[1.2rem]">
                                    02.

                                </p>

                                <h4 class="text-[#cbffd9] text-[1.75rem] font-semibold">
                                    Customized
                                </h4>

                                <h4 class="text-[1.75rem]">
                                    Solutions


                                </h4>
                            </div>

                            <hr>

                            <p class="text-lg">
                                We tailor tech solutions to your unique business needs, ensuring our services align with
                                your specific requirements.
                            </p>
                        </div>

                    </div>

                    <!-- 3rd box -->
                    <div class="flex flex-col gap-[5rem] bg-[#313656]  pt-4 pb-6 px-3">
                        <div>
                            <img src="{{asset('images\framer.svg')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-4 mx-2">

                            <div>
                                <p class="text-[1.2rem]">
                                    03.

                                </p>

                                <h4 class="text-[#ffcdcd] text-[1.75rem] font-semibold">
                                    Scalable
                                </h4>

                                <h4 class="text-[1.75rem]">
                                    Solutions


                                </h4>
                            </div>

                            <hr>

                            <p class="text-lg">
                                With our flexible approach, you can ramp up your development team for new projects or
                                scale back during slow periods.



                            </p>
                        </div>

                    </div>

                    <!-- 4th box -->

                    <div class="flex flex-col gap-[5rem] bg-[#313656]  pt-4 pb-6 px-3">
                        <div>
                            <img src="{{asset('images\ontology-ont.svg')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-4 mx-2">

                            <div>
                                <p class="text-[1.2rem]">
                                    04.

                                </p>

                                <h4 class="text-[#b6aaff] text-[1.75rem] font-semibold">
                                    Data
                                </h4>

                                <h4 class="text-[1.75rem]">
                                    Security


                                </h4>
                            </div>

                            <hr>

                            <p class="text-lg">
                                We take security seriously and our team of experts is dedicated to ensuring that your
                                data is kept confidential.

                            </p>
                        </div>

                    </div>
                </div>

                <div class="flex flex-row gap-10 justify-between items-center my-10  mx-14 w-[90%]">
                    <div class="flex flex-col gap-5 w-[50%] ">
                        <h4 class="text-[3rem] ml-8">
                            Our Invisible Hand
                        </h4>

                        <h4 class="text-[2.7rem] mr-14 text-right -mt-6">
                            <b> In Action</b>

                        </h4>

                    </div>
                    <div class="left-1/2 -ml-0.5 w-0.5 h-72 bg-gray-600"></div>



                    <div class="w-[50%] flex flex-col gap-5 ">
                        <p class="text-[1.3rem]">We harness the power of our ingeniously skilled team, and seamlessly
                            integrate into our clients&apos; teams, becoming an extension of their own.
                        </p>
                        <p class="text-[1.3rem]">We provide the expertise, guidance, and support needed to turn your
                            vision into tangible success.

                        </p>


                    </div>
                </div>



            </div>







        </div>

        <!--Spectrum Of Solutions  -->


        <div class="flex flex-col mb-5 ">
            <!-- row 1 -->
            <div class="flex flex-row justify-center items-center w-[90%] gap-14">
                <div class="">
                    <h2 class="text-[2.5rem] flex flex-col">
                        <span>Tap Into Our</span>
                        <b>Spectrum Of Solutions</b>
                    </h2>
                </div>
                <div class="flex flex-col gap-5">
                    <div>
                        <img src="{{asset('images\little Star.svg')}}" alt="">
                    </div>
                    <p class="text-lg">
                        Your business needs a solid plan, and the right <br>team to stay ahead of the curve.
                    </p>
                </div>
            </div>

            <!-- row 2 -->
            <div class="flex flex-row justify-end mx-14">
                <p class="text-lg">
                    Our expert technology leaders Lead, Build, and Deliver <br>systems and strategies
                    that drive growth
                    and
                    ensure your <br> cyber safety.
                </p>
            </div>


            <!-- row 3 -->
            <div class="flex flex-row mx-auto gap-5 mt-14">
                <!-- box 1 -->
                <div class="bg-[#cbffd9] pt-4 pb-6  h-[600px] flex flex-col text-left justify-between">
                    <h2 class="text-8xl transform -rotate-90 mt-14 transform-origin-right-bottom  self-start">
                        Lead
                    </h2>
                    <button>
                        <span class="text-xl">Learn More</span>
                        <span class="material-symbols-outlined ">
                            arrow_forward
                        </span>
                    </button>
                </div>




                <div class="bg-[#ffcbe7] pt-4 pb-6  h-[600px] flex flex-col text-left justify-between">
                    <h2 class="text-8xl transform -rotate-90 mt-14 transform-origin-right-bottom  self-start">
                        Build

                    </h2>
                    <button>
                        <span class="text-xl">Learn More</span>
                        <span class="material-symbols-outlined ">
                            arrow_forward
                        </span>
                    </button>
                </div>
                <div class="bg-[#d2cbff] pt-4 pb-6  h-[600px] flex flex-col text-left justify-between">
                    <h2 class="text-8xl transform -rotate-90 mt-[6.5rem] transform-origin-right-bottom  self-start">
                        Deliver
                    </h2>
                    <button>
                        <span class="text-xl">Learn More</span>
                        <span class="material-symbols-outlined ">
                            arrow_forward
                        </span>
                    </button>
                </div>
            </div>


        </div>































        <!-- tailored pricing -->
        <div class=" bg-[#cbffd9] py-20 ">
            <div class="flex flex-row mb-8 mx-14 gap-14 justify-center items-center w-[85%]">
                <div class="w-[50%] flex flex-col gap-5 ">
                    <p class="text-[1.3rem]">Pricing that&apos;s as clear as day, so you can focus on what matters most.
                    </p>
                    <p class="text-[1.3rem]">See our transparent Pricing page to discover our suite of services tailored
                        to each stage of your journey, seamlessly integrated to guide you from ideation to market
                        adoption.

                    </p>


                </div>

                <div class="left-1/2 -ml-0.5 mr-10 w-0.5 h-[480px] bg-[#a5edce] "></div>

                <div class="flex flex-col gap-10 justify-center items-start ">

                    <div class="mr-2">
                        <img src="{{asset('images\Star.svg')}}" alt="">
                    </div>


                    <div class="flex flex-col text-[3.2rem] gap-5   ">
                        <h1>Tailored</h1>
                        <h1>Pricing To Align</h1>
                        <h1>With <b>Your Needs</b> </h1>
                    </div>

                    <div class="flex flex-row justify-between gap-2 pb-14 mt-6">

                        <div class="">
                            <button class="px-8 py-3 rounded-lg bg-[#082b3f] text-white text-2xl font-semibold">
                                <span class="ml-3">Let&apos;s Talk</span>
                                <span class="material-symbols-outlined ">
                                    arrow_forward
                                </span>
                            </button>
                        </div>

                    </div>




                </div>
            </div>
        </div>


        <!-- Partners In Excellence -->
        <div class="flex flex-col justify-center items-center gap-14 py-10">
            <div class="flex flex-col justify-center items-center gap-3">
                <h2 class="text-[2.5rem]">Partners In <b>Excellence</b> </h2>
                <div class="flex flex-row gap-[8rem]">
                    <img src="{{asset('images/partners/beach-booker.svg')}}" alt="">
                    <img src="{{asset('images/partners/artisan.svg')}}" alt="">
                    <img src="{{asset('images/partners/prutech.svg')}}" alt="">
                    <img src="{{asset('images/partners/snf-data.svg')}}" alt="">
                </div>
            </div>
            <div class="flex flex-row">
                <div>
                    <img src="{{asset('images/parnter-hero-image.webp')}}" alt="">
                </div>
                <div class="flex flex-col gap-10">
                    <h2 class="text-[2.5rem] -ml-14">
                        <span class="">Your Success Is Our</span>
                        <br>
                        <span class="ml-14 "> <b>Greatest Reward</b></span>

                    </h2>
                    <p class="text-xl ml-14 ">
                        Your success fuels our drive to help <br> businesses like yours make a lasting impact.
                    </p>
                    <div class="flex flex-row justify-between gap-2 pb-14 mt-6 ml-14">

                        <div class="">
                            <button class="px-8 py-3 rounded-lg bg-[#082b3f] text-white text-2xl font-semibold">
                                <span class="ml-3">Let&apos;s Talk</span>
                                <span class="material-symbols-outlined ">
                                    arrow_forward
                                </span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!--        Our Client's Words Speak -->
        <div class="flex flex-col gap-5 mb-14">

            <!-- row 1 -->
            <div class="flex flex-row justify-center items-start gap-7">
                <div>
                    <h2 class="text-[2.5rem] ">
                        <span>Our Client's Words Speak</span>
                        <br>
                        <span class="-ml-14"><b>Louder Than Ours</b></span>
                    </h2>
                    <p class="text-xl ">
                        Happy Partners are the chattiest. They have <br> a lot to say!
                    </p>
                </div>

                <div class="bg-[#ffcbe7] p-6 flex flex-row w-[40%] items-center justify-between">
                    <div class="w-[75%] flex flex-col gap-4">
                        <div>
                            <img src="{{asset('images/clients/quote.svg')}}" alt="">
                        </div>
                        <p class="text-sm">Their developers are exceptionally skilled, and they brought our vision</p>
                        <p class="text-sm">to life with remarkable precision. The user interface they crafted is not
                            only aesthetically
                            pleasing but also highly intuitive, ensuring a delightful experience for our users.</p>
                        <p class="text-lg font-semibold">Yogi Anoop Ji</p>
                    </div>
                    <div class="w-[25%] flex justify-end">
                        <img class="rounded-full" src="{{asset('images/clients/yogi_anoop_1-1.webp')}}" alt="...">
                    </div>
                </div>
            </div>

            <!-- row 2 -->
            <div class="flex flex-row justify-center items-center">
                <div class="bg-[#d2cbff] p-6 flex flex-row w-[40%] items-center justify-between">
                    <div class="w-[75%] flex flex-col gap-4">
                        <div>
                            <img src="{{asset('images/clients/quote.svg')}}" alt="">
                        </div>
                        <p class="text-sm">SpectusOp Application Development exceeded my expectations with

                        </p>
                        <p class="text-sm">their exceptional expertise, creativity, and attention to detail. I highly
                            recommend them for anyone seeking top-notch website development services.
                        </p>
                        <p class="text-lg font-semibold">Phani Gongura
                        </p>
                    </div>
                    <div class="w-[25%] flex justify-end">
                        <img class="rounded-full" src="{{asset('images/clients/yogi_anoop_1-1.webp')}}" alt="...">
                    </div>
                </div>
            </div>

            <!-- row 3 -->
            <div class="relative mt-10">
                <div class="bg-[#091036] h-56 w-full"></div>
                <div class="absolute -top-10 -right-[37rem]	">
                    <div class="bg-[#cbffd9] p-6 flex flex-row w-[40%] items-center  justify-between">
                        <div class="w-[75%] flex flex-col gap-4">
                            <div>
                                <img src="{{asset('images/clients/quote.svg')}}" alt="">
                            </div>
                            <p class="text-sm">SpectusOp Application Development exceeded my expectations with

                            </p>
                            <p class="text-sm">their exceptional expertise, creativity, and attention to detail. I
                                highly
                                recommend them for anyone seeking top-notch website development services.
                            </p>
                            <p class="text-lg font-semibold">Phani Gongura
                            </p>
                        </div>
                        <div class="w-[25%] flex justify-end">
                            <img class="rounded-full" src="{{asset('images/clients/yogi_anoop_1-1.webp')}}" alt="...">
                        </div>
                    </div>
                </div>
            </div>


        </div>










    </section>

    <x-footer />
</body>

</html>