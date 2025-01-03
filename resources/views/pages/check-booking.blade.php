@extends('layouts.app')

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[430px] rounded-b-[75px] bg-[linear-gradient(180deg,#F2F9E6_0%,#D2EDE4_100%)]">
    </div>
    <div class="relative flex flex-col gap-[30px] my-[60px] px-5">
        <h1 class="font-bold text-[30px] leading-[45px] text-center">Check Your<br>Booking Details</h1>
        <form action="booking-details.html" class="flex flex-col rounded-[30px] border border-[#F1F2F6] p-5 gap-6 bg-white">
            <div class="flex flex-col gap-[6px]">
                <h1 class="font-semibold text-lg">Your Informations</h1>
                <p class="text-sm text-ngekos-grey">Fill the fields below with your valid data</p>
            </div>
            <div id="InputContainer" class="flex flex-col gap-[18px]">
                <div class="flex flex-col w-full gap-2">
                    <p class="font-semibold">Booking ID</p>
                    <label
                        class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#91BF77] transition-all duration-300">
                        <img src="assets/images/icons/note-favorite-grey.svg" class="w-5 h-5 flex shrink-0" alt="icon">
                        <input type="text" name="" id=""
                            class="appearance-none outline-none w-full font-semibold placeholder:text-ngekos-grey placeholder:font-normal"
                            placeholder="Write your booking id">
                    </label>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <p class="font-semibold">Email Address</p>
                    <label
                        class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#91BF77] transition-all duration-300">
                        <img src="assets/images/icons/sms.svg" class="w-5 h-5 flex shrink-0" alt="icon">
                        <input type="email" name="" id=""
                            class="appearance-none outline-none w-full font-semibold placeholder:text-ngekos-grey placeholder:font-normal"
                            placeholder="Write your email">
                    </label>
                </div>
                <div class="flex flex-col w-full gap-2">
                    <p class="font-semibold">Phone No</p>
                    <label
                        class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#91BF77] transition-all duration-300">
                        <img src="assets/images/icons/call.svg" class="w-5 h-5 flex shrink-0" alt="icon">
                        <input type="tel" name="" id=""
                            class="appearance-none outline-none w-full font-semibold placeholder:text-ngekos-grey placeholder:font-normal"
                            placeholder="Write your phone">
                    </label>
                </div>
                <button type="submit"
                    class="flex w-full justify-center rounded-full p-[14px_20px] bg-ngekos-orange font-bold text-white">View
                    My Booking</button>
            </div>
        </form>
    </div>
    <div id="BottomNav" class="relative flex w-full h-[138px] shrink-0">
        <nav class="fixed bottom-5 w-full max-w-[640px] px-5 z-10">
            <div class="grid grid-cols-4 h-fit rounded-[40px] justify-between py-4 px-5 bg-ngekos-black">
                <a href="index.html" class="flex flex-col items-center text-center gap-2">
                    <img src="assets/images/icons/global.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                    <span class="font-semibold text-sm text-white">Discover</span>
                </a>
                <a href="check-booking.html" class="flex flex-col items-center text-center gap-2">
                    <img src="assets/images/icons/note-favorite-green.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                    <span class="font-semibold text-sm text-white">Orders</span>
                </a>
                <a href="find-kos.html" class="flex flex-col items-center text-center gap-2">
                    <img src="assets/images/icons/search-status.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                    <span class="font-semibold text-sm text-white">Find</span>
                </a>
                <a href="#" class="flex flex-col items-center text-center gap-2">
                    <img src="assets/images/icons/24-support.svg" class="w-8 h-8 flex shrink-0" alt="icon">
                    <span class="font-semibold text-sm text-white">Help</span>
                </a>
            </div>
        </nav>
    </div>
    @include('includes.navbar')
@endsection
