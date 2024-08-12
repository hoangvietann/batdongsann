@extends('frontend.layout.main')
@section('title')
{{$title}}
@endsection
@section('subcontent')
<div class="mt-5 mx-5 lg:container lg:mx-auto lg:px-20" style="font-family: Arial, Helvetica, sans-serif;">
    <div class="text-[#D7D7D7] text-[14px]">
        <p>Trang chủ/Tin tức/<span class="text-black">{{ $news['title'] }}</span> </p>
    </div>
    <div class="w-full ">
        <h1 class="text-[35px] text-[#2c2c2c] font-medium mb-10">{{ $news['title'] }}</h1>
        <div class="flex item-center gap-4 mb-8">
            <div class="w-14 h-14 ">
                <img class="w-full h-full object-cover rounded-full" src="{{ $news->author->photo_url }}" alt="Ảnh tác giả">
            </div>    
            <div class="flex flex-col  justify-center gap-2">
                <p class="text-base">Được đăng bởi <span class="font-bold">{{ $news->author->name }}</span></p>   
                <p class="text-base">Ngày đăng {{ $news['created_at'] }} </p>
            </div>        
        </div>
        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-8 p-5">
              

                <div class="block mb-10">
                    <p class="text-base mb-10">{{ $news->description }}</p>
                    <p class="text-base">{!! $news->content !!}</p>
                </div>
                <div class="block p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 mb-10" role="alert">
                    <span class="font-medium">Nguồn</span> Từ abc xyz;
                </div>
                <div class="">
                    <span class="block text-sm mb-4">Chia sẻ bài viết này</span>
                    <div class="flex items-center">
                        <a class="me-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 36 36" fill="none">
                                <rect x="0.5" y="0.5" width="35" height="35" rx="7.5" fill="white"></rect>
                                <path d="M21.178 11.198V13.424H19.876C19.3907 13.424 19.0593 13.5267 18.882 13.732C18.714 13.928 18.63 14.2267 18.63 14.628V16.224H21.108L20.772 18.716H18.63V25.1H16.054V18.716H13.912V16.224H16.054V14.39C16.054 13.3353 16.3433 12.5233 16.922 11.954C17.5007 11.3847 18.2847 11.1 19.274 11.1C20.1233 11.1 20.758 11.1327 21.178 11.198Z" fill="#505050"></path>
                                <rect x="0.5" y="0.5" width="35" height="35" rx="7.5" stroke="#505050"></rect>
                            </svg>
                        </a>
                        <a href="" class="me-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 36 36" fill="none">
                                <rect x="0.5" y="0.5" width="35" height="35" rx="7.5" fill="white"></rect>
                                <path d="M14.192 15.44V24.484H11.182V15.44H14.192ZM14.388 12.654C14.388 13.0927 14.2247 13.4613 13.898 13.76C13.5807 14.0587 13.1747 14.208 12.68 14.208H12.666C12.1807 14.208 11.7793 14.0587 11.462 13.76C11.154 13.4613 11 13.088 11 12.64C11 12.192 11.154 11.8233 11.462 11.534C11.77 11.2447 12.1807 11.1 12.694 11.1C13.2073 11.1 13.6133 11.2447 13.912 11.534C14.2107 11.8233 14.3693 12.1967 14.388 12.654ZM18.84 16.728C18.9613 16.532 19.078 16.3687 19.19 16.238C19.3113 16.1073 19.4793 15.9533 19.694 15.776C19.9087 15.5987 20.1793 15.468 20.506 15.384C20.8047 15.3 21.1547 15.2487 21.556 15.23C22.5827 15.23 23.4133 15.5753 24.048 16.266C24.6827 16.9567 25 17.9693 25 19.304V24.484H22.018V19.64C22.018 19.0053 21.892 18.506 21.64 18.142C21.388 17.778 21.0007 17.596 20.478 17.596C20.1047 17.596 19.7873 17.7033 19.526 17.918C19.274 18.114 19.078 18.3753 18.938 18.702C18.8727 18.87 18.84 19.1127 18.84 19.43V24.484H15.83L15.844 23.07C15.8533 20.8767 15.858 19.3787 15.858 18.576V15.888L15.83 15.44H18.84V16.728Z" fill="#505050"></path>
                                <rect x="0.5" y="0.5" width="35" height="35" rx="7.5" stroke="#505050"></rect>
                            </svg>
                        </a>
                        <a href="" class="me-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 36 36" fill="none">
                                <rect x="0.5" y="0.5" width="35" height="35" rx="7.5" fill="white"></rect>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25 23.9442V12.0558C25 11.7768 24.8896 11.5091 24.6928 11.3113C24.4961 11.1135 24.229 11.0015 23.95 11H23.9499C24.2289 11.0015 24.496 11.1135 24.6927 11.3113C24.8895 11.5091 24.9999 11.7768 24.9999 12.0558V21.1208C24.9601 21.1684 24.9173 21.2132 24.8716 21.255C22.6899 23.3608 18.0057 23.5592 15.3399 21.8675C14.8237 22.0665 14.2702 22.1501 13.7182 22.1125C13.6482 22.1067 13.6482 22.0775 13.6482 22.0367C13.8535 21.8737 13.9979 21.6464 14.0582 21.3914C14.1186 21.1364 14.0913 20.8685 13.9807 20.6308C13.9763 20.6176 13.9763 20.6032 13.9807 20.59C12.1666 18.035 12.3649 13.4733 14.5641 11.3617C14.6999 11.2318 14.8441 11.111 14.9957 11H12.05C11.771 11.0015 11.5039 11.1135 11.3072 11.3113C11.1104 11.5091 11 11.7768 11 12.0558V23.9442C11 24.2232 11.1104 24.4909 11.3072 24.6887C11.5039 24.8865 11.771 24.9985 12.05 25H23.95C24.229 24.9985 24.4961 24.8865 24.6928 24.6887C24.8896 24.4909 25 24.2232 25 23.9442ZM22.8207 15.7226C22.6641 15.6603 22.4968 15.6294 22.3282 15.6317C22.16 15.6294 21.9929 15.6603 21.8367 15.7227C21.6804 15.7852 21.538 15.8779 21.4177 15.9955C21.2974 16.1131 21.2015 16.2533 21.1355 16.4081C21.0695 16.5629 21.0347 16.7292 21.0332 16.8975C21.0355 17.0653 21.0708 17.2309 21.1371 17.3851C21.2035 17.5392 21.2995 17.6787 21.4197 17.7957C21.54 17.9127 21.6821 18.0049 21.838 18.067C21.9939 18.1291 22.1605 18.1598 22.3282 18.1575C22.6676 18.1622 22.995 18.0322 23.2388 17.7961C23.4826 17.56 23.6229 17.2369 23.6291 16.8975C23.6268 16.729 23.5913 16.5625 23.5247 16.4077C23.4581 16.2529 23.3616 16.1127 23.2408 15.9951C23.12 15.8776 22.9773 15.785 22.8207 15.7226ZM20.6774 14.9025H20.0941L20.1116 17.9475C20.1116 17.997 20.1312 18.0445 20.1662 18.0795C20.2012 18.1145 20.2487 18.1342 20.2982 18.1342H20.6774V14.9025ZM19.0966 15.8825C18.8759 15.7281 18.6134 15.6447 18.3441 15.6433L18.3557 15.6667C18.1882 15.6644 18.0219 15.6952 17.8664 15.7573C17.7108 15.8194 17.5691 15.9117 17.4493 16.0288C17.3295 16.1459 17.234 16.2855 17.1684 16.4395C17.1027 16.5936 17.0681 16.7592 17.0666 16.9267C17.0727 17.2619 17.211 17.5812 17.4513 17.8149C17.6917 18.0487 18.0146 18.1781 18.3499 18.175C18.6192 18.1737 18.8817 18.0902 19.1024 17.9358C19.1082 17.9905 19.1341 18.0411 19.175 18.0777C19.216 18.1143 19.2691 18.1345 19.3241 18.1342H19.6274V15.7133H19.0966V15.8825ZM14.3307 17.6792C14.258 17.7696 14.2225 17.8843 14.2316 18V18.1283H16.7341C16.7632 18.1283 16.792 18.1226 16.8189 18.1115C16.8458 18.1003 16.8702 18.084 16.8908 18.0634C16.9114 18.0428 16.9277 18.0184 16.9389 17.9915C16.95 17.9646 16.9557 17.9358 16.9557 17.9067V17.615H15.0366L16.7341 15.5383L16.8274 15.4275C16.9115 15.3108 16.9527 15.1686 16.9441 15.025V14.9433H14.3074V15.4975H16.1391L14.3307 17.6792ZM22.5341 17.6246C22.4744 17.6385 22.4131 17.6451 22.3516 17.6442L22.3282 17.6383C22.1337 17.6354 21.9478 17.5572 21.8097 17.4201C21.6716 17.2831 21.5919 17.0979 21.5874 16.9033C21.5905 16.7032 21.6725 16.5124 21.8157 16.3726C21.9097 16.2807 22.0252 16.2156 22.1501 16.1823C22.2078 16.1669 22.2676 16.1582 22.3282 16.1568C22.336 16.1567 22.3438 16.1566 22.3516 16.1567C22.4131 16.1557 22.4744 16.1623 22.5341 16.1762C22.5707 16.1848 22.6067 16.196 22.6418 16.21C22.734 16.2468 22.8181 16.3014 22.8891 16.3709C22.9602 16.4403 23.0168 16.5231 23.0557 16.6144C23.0946 16.7058 23.115 16.804 23.1157 16.9033C23.1142 17.0022 23.0932 17.0997 23.054 17.1904C23.0148 17.2811 22.9581 17.3632 22.8871 17.432C22.8161 17.5008 22.7323 17.555 22.6404 17.5914C22.6058 17.6051 22.5702 17.6162 22.5341 17.6246ZM18.893 17.4464C18.7532 17.5754 18.5693 17.6461 18.3791 17.6442L18.3557 17.6267C18.1662 17.6238 17.985 17.5485 17.8494 17.4161C17.7137 17.2837 17.634 17.1044 17.6266 16.915C17.6273 16.8172 17.6474 16.7205 17.6857 16.6306C17.724 16.5406 17.7798 16.4591 17.8497 16.3908C17.9197 16.3224 18.0025 16.2686 18.0933 16.2325C18.1842 16.1963 18.2813 16.1785 18.3791 16.18H18.4199C18.5662 16.1857 18.7066 16.2345 18.824 16.319C18.8562 16.3422 18.8867 16.368 18.9151 16.3964C19.0471 16.5284 19.1244 16.7052 19.1316 16.8917V16.95C19.1182 17.1398 19.0329 17.3173 18.893 17.4464Z" fill="#2C2C2C"></path>
                                <rect x="0.5" y="0.5" width="35" height="35" rx="7.5" stroke="#505050"></rect>
                            </svg>
                        </a>
                        <button class="" class="me-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 36 36" fill="none">
                                <rect x="0.5" y="0.5" width="35" height="35" rx="7.5" fill="white"></rect>
                                <path d="M12.162 21.376C12.162 21.0773 12.26 20.83 12.456 20.634L14.682 18.408C14.8873 18.2027 15.1347 18.1 15.424 18.1C15.7227 18.1 15.9747 18.2167 16.18 18.45L15.76 18.87L15.578 19.08C15.5127 19.1733 15.4707 19.262 15.452 19.346L15.41 19.64C15.41 19.9293 15.5127 20.172 15.718 20.368C15.9233 20.5547 16.166 20.6573 16.446 20.676C16.5487 20.676 16.6467 20.662 16.74 20.634C16.7867 20.6247 16.8613 20.592 16.964 20.536L17.006 20.508L17.048 20.48C17.132 20.4053 17.188 20.354 17.216 20.326L17.636 19.906C17.8787 20.13 18 20.3867 18 20.676C18 20.984 17.8973 21.2267 17.692 21.404L15.48 23.644C15.3027 23.84 15.0693 23.938 14.78 23.938C14.4907 23.938 14.2387 23.84 14.024 23.644L12.456 22.09C12.26 21.8753 12.162 21.6373 12.162 21.376ZM18 15.524C18 15.2347 18.098 14.9873 18.294 14.782L20.492 12.57C20.716 12.3647 20.9587 12.262 21.22 12.262C21.5093 12.262 21.752 12.36 21.948 12.556L23.53 14.138C23.7353 14.3247 23.838 14.558 23.838 14.838C23.838 15.1087 23.7353 15.356 23.53 15.58L21.304 17.806C21.108 18.002 20.8607 18.1 20.562 18.1C20.2727 18.1 20.0207 17.9927 19.806 17.778L20.24 17.33C20.3053 17.2647 20.3613 17.1993 20.408 17.134C20.4547 17.0687 20.4967 16.98 20.534 16.868C20.562 16.784 20.576 16.6813 20.576 16.56C20.576 16.2707 20.478 16.028 20.282 15.832C20.086 15.6267 19.8433 15.5287 19.554 15.538C19.4513 15.538 19.3487 15.5567 19.246 15.594C19.1433 15.622 19.0547 15.6593 18.98 15.706C18.8867 15.7807 18.8213 15.832 18.784 15.86L18.35 16.308C18.1167 16.084 18 15.8227 18 15.524ZM11 21.39C11 22.0807 11.2473 22.664 11.742 23.14L13.002 24.372C13.4593 24.8573 14.0333 25.1 14.724 25.1C15.424 25.1 16.012 24.8527 16.488 24.358L18.252 22.594C18.728 22.118 18.966 21.5347 18.966 20.844C18.966 20.144 18.714 19.5513 18.21 19.066L18.966 18.31C19.4607 18.814 20.0487 19.066 20.73 19.066C21.4207 19.066 22.0087 18.8233 22.494 18.338L24.272 16.56C24.7573 16.0747 25 15.4913 25 14.81C25 14.1193 24.7573 13.536 24.272 13.06L23.012 11.8C22.5267 11.3333 21.9433 11.1 21.262 11.1C20.5807 11.1 19.9973 11.3427 19.512 11.828L17.762 13.606C17.2767 14.0913 17.034 14.6793 17.034 15.37C17.034 16.0513 17.286 16.6393 17.79 17.134L17.034 17.89C16.5487 17.386 15.9607 17.134 15.27 17.134C14.5793 17.134 13.9913 17.3767 13.506 17.862L11.728 19.64C11.2427 20.1253 11 20.7087 11 21.39Z" fill="#505050"></path>
                                <rect x="0.5" y="0.5" width="35" height="35" rx="7.5" stroke="#505050"></rect></svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-4 sticky">
                <div class="mb-8">
                    <h2 class="text-lg  text-black mb-4">Khám phá thêm</h2>
                    <div class="flex items-center flex-wrap gap-4">
                        <button class="bg-gray-200 text-gray-500 rounded-full px-4 py-2 hover:bg-[#ffeceb] hover:text-[#74150f]">Luật nhà ở</button>
                        <button class="bg-gray-200 text-gray-500 rounded-full px-4 py-2 hover:bg-[#ffeceb] hover:text-[#74150f]">Nhà ở xã hội</button>
                    </div>
                </div>
                <div class="border border-gray-200">
                    <h1 class="text-[18px] font-bold text-gray-900 px-6 py-6">Bài viết được xem nhiều nhất</h1>
                    <div class="flex items-start mx-4 py-6 border-t border-gray-200">
                        <span class="rounded-full px-4 py-2 bg-[#ffeceb] text-[#74150f] mr-2 font-bold">1</span>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-400 overflow-hidden line-clamp-2">Lãi suấy vay của ngân hàng tháng 11/2020 ở mức bao nhiêu?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <h1 class="font-bold text-[25px] mb-8">Bất động sản liên quan</h1>
        </div>
        <div>
            <h1 class="font-bold text-[25px] mb-8">Bài viết khác</h1>
            <div class="flex w-[70%] border-b-2 pb-4 border-gray-300 cursor-pointer">
                <div class="w-2/5 mr-4">
                    <div class="relative block mb-4 h-[200px]">
                        <img src="{{ asset('uploads/1700805093437.jpg') }}" alt="" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div>
                        <button class="bg-gray-200 text-gray-500 rounded-full px-4 py-2 hover:bg-[#ffeceb] hover:text-[#74150f]">Luật nhà ở</button>
                    </div>
                </div>
                <div class="flex flex-col w-3/5">
                    <span class="mb-4 text-sm text-gray-400">01/12/2023 8:10 Đông Phong</span>
                    <h1 class="text-[18px] text-gray-900 mb-5 overflow-hidden line-clamp-2 font-bold hover:text-gray-500">6 Thay Đổi Quan Trọng Trong Luật Nhà ở 2023</h1>
                    <p class="text-[14px] text-gray-900">Luật Nhà ở 2023 vừa được Quốc hội thông qua có nhiều quy định mới về việc quản lý chung cư mini, bỏ thời hạn sở hữu nhà chung cư và nhiều chính sách đáng chú ý dành cho nhà ở xã hội.</p>
                </div>
            </div>
            <div class="w-[70%] flex justify-center my-10">
                <button type="button" 
                    class="load-more-news rounded-lg bg-white py-2.5 px-5 font-bold border border-[#DC2D27] text-[#DC2D27] hover:text-white hover:bg-[#DC2D27] text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900" >
                    Xem thêm
                </button>
            </div>
        </div>
    </div>       
</div>
@endsection