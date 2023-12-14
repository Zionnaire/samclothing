<x-layout>
    <div class="w-100 container-fluid flex flex-col justify-center bg-light px-0 lg:px-0 p-10">
        <div class="container  flex flex-col justify-around contact px-0 lg:px-0">
            <div class="w-100 flex flex-col justify-around gap-0 mx-0 lg:mx-0">
                <div class="flex-col lg:flex-row contact-text py-5 wow fadeIn w-full lg:w-100" data-wow-delay="0.5s">
                    <div class="p-5 sm:p-10 text-center md:text-start">
                        <div class="section-title text-start">
                            <h1 class="text-4xl sm:text-5xl mb-4 text-center md:text-start">Contact Us</h1>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center quote-text p-5 wow fadeIn w-full lg:w-100" data-wow-delay="0.5s">
                    <div class="flex flex-col w-[100%] px-10 gap-5 lg:pr-0">
                        <div class="section-title text-start">
                            <h1 class="text-3xl flex text-center md:text-5xl mb-4">Custom Design Request</h1>
                        </div>
                        <p class="mb-4 pb-2 text-center md:text-start">Have you got any custom design you wish to let us create for you?</p>
                        <p class="mb-4 pb-2 text-center md:text-start">Just make your Request</p>
                        <p class="mb-4 pb-2 text-center md:text-start">We are a click away!</p>
    
                        <form action="/contact" method="post">
                            @csrf
                            @method('POST')
                            <div class="w-full flex flex-col gap-10 py-5">
                                <div class="flex col-span-12 sm:col-span-6 md:col-span-2 gap-5">
                                    
                                   <div class="flex flex-col gap-5 w-full">
                                    <input type="email" name="email" class="w-full form-input border border-3 h-14 bg-white px-5" placeholder="Your Email" value="{{old('email')}}">
                                    @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                   </div>
                                   <div class="flex flex-col gap-5 w-full">
                                    <input type="text" name="name" class="w-full form-input border border-3 h-14 bg-white px-5" placeholder="Your Name" value="{{old('name')}}">
                                    @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                </div>
                                </div>
                               

                                <div class="flex col-span-12 sm:col-span-6 md:col-span-2 gap-5">
                                 <div class="flex flex-col gap-5 w-full">
                                    <input type="text" name="phone" class="w-full form-input border border-3 h-14 bg-white px-5" placeholder="Your Mobile" value="{{old('phone')}}">
                                    @error('phone')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                    @enderror
                                 </div>
                                 <div class="flex flex-col gap-5 w-full">
                                    <div class="w-full flex col-span-12 sm:flex-col-6 md:col-span-2">
                                        <select class="w-full form-select border border-3 h-14 bg-white px-5" id="category" name="category">
                                            @error('category')
                                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                            <option selected class="text-grey">Select A Design</option>
                                            <option value="1">Suits</option>
                                            <option value="2">Native Attires</option>
                                            <option value="3">Senator Wears</option>
                                            <option value="4">T-Shirts</option>
                                            <option value="5">Pant Trousers</option>
                                        </select>
                                    </div>
                                 </div>
                                </div>
                               
                                <div class="flex flex-col-12">
                                    <textarea name="special_note" class="form-input border border-3 w-full bg-white p-5" placeholder="Special Note">{{old('special_note')}}</textarea>
                                    @error('special_note')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex justify-center items-center flex-col-12">
                                    <button class="flex justify-center items-center text-white text-[20px] bg-btnBg py-3 rounded-lg px-5 w-full">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>