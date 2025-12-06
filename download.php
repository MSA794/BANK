<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تطبيق بنكك المحدث - النسخة الاحترافية</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        @keyframes rgb-bg {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(0, 230, 118, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(0, 230, 118, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0, 230, 118, 0); }
        }
        
        @keyframes rgb-text {
            0% { color: #00e676; }
            25% { color: #00b0ff; }
            50% { color: #ff4081; }
            75% { color: #ffeb3b; }
            100% { color: #00e676; }
        }
        
        @keyframes rgb-border {
            0% { border-color: #00e676; }
            25% { border-color: #00b0ff; }
            50% { border-color: #ff4081; }
            75% { border-color: #ffeb3b; }
            100% { border-color: #00e676; }
        }
        
        .rgb-text {
            animation: rgb-text 8s infinite;
        }
        
        .rgb-border {
            animation: rgb-border 8s infinite;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(0, 230, 118, 0.25);
        }
        
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="font-['Tajawal'] bg-gray-900 text-gray-200 min-h-screen flex flex-col" style="direction: rtl;">
    <!-- RGB Background Overlay -->
    <div class="fixed inset-0 z-0 opacity-10" style="background: linear-gradient(270deg, #00e676, #00b0ff, #ff4081, #ffeb3b); background-size: 800% 800%; animation: rgb-bg 15s ease infinite;"></div>
    
    <!-- Floating Register Button -->
    <a href="register.html" class="fixed bottom-8 left-1/2 transform -translate-x-1/2 z-50 bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 text-gray-900 font-bold py-4 px-8 rounded-full shadow-xl hover:shadow-2xl transition-all duration-300 animate-bounce hover:animate-none text-lg flex items-center">
        <span>فتح حساب وهمي</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
    </a>

    <!-- Header -->
    <header class="relative z-10 bg-gray-800 bg-opacity-80 backdrop-blur-md py-6 shadow-lg border-b border-gray-700">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-center rgb-text">
                <span class="inline-block animate-float">تطبيق بنكك المحدث</span>
            </h1>
            <p class="text-center text-green-400 mt-2">الأقوى والأحدث في عالم البنوك الوهمية</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow relative z-10 py-8">
        <div class="container mx-auto px-4">
            <!-- App Icon Section -->
            <div class="flex flex-col items-center mb-12">
                <div class="relative mb-6">
                    <div class="absolute inset-0 rounded-2xl bg-green-500 blur-xl opacity-40 animate-pulse"></div>
                    <img src="app-icon.png" alt="أيقونة التطبيق" class="relative w-32 h-32 md:w-40 md:h-40 rounded-2xl border-4 border-green-500 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 animate-float">
                </div>
                
                <!-- App Details -->
                <div class="text-center max-w-2xl mx-auto bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-6 border border-gray-700 shadow-lg">
                    <h2 class="text-2xl font-bold rgb-text mb-4">التحديث الجديد لتطبيق بنكك</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-300">
                        <p class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            تاريخ التحديث: 7.8.2025
                        </p>
                        <p class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                            </svg>
                            الحجم: 5 ميجابايت
                        </p>
                        <p class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            الأمان: تم الفحص والتحقق
                        </p>
                        <p class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                            نظام التشغيل: أندرويد 6+
                        </p>
                    </div>
                </div>
                
                <!-- Download Button -->
                <button onclick="showDownloadAlert()" class="mt-8 relative overflow-hidden bg-gradient-to-r from-green-500 to-blue-500 hover:from-pink-500 hover:to-yellow-500 text-white font-bold py-4 px-10 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 group">
                    <span class="relative z-10 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        تحميل التطبيق
                    </span>
                    <span class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></span>
                </button>
                
                <!-- Telegram Link -->
                <a href="https://t.me/hacksdbokk" class="mt-4 text-blue-400 hover:text-blue-300 transition-colors duration-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.603.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
                    </svg>
                    تواصل تلغرام للشراء
                </a>
            </div>
            
            <!-- Warning Note -->
            <div class="bg-yellow-900 bg-opacity-30 border-l-4 border-yellow-500 rounded-r-lg p-4 mb-12 max-w-4xl mx-auto">
                <div class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <div>
                        <h3 class="text-lg font-bold text-yellow-400">تنويه مهم</h3>
                        <p class="text-yellow-200">لتثبيت النسخة الجديدة بدون أي مشاكل يجب إلغاء تثبيت النسخة القديمة أولاً.</p>
                    </div>
                </div>
            </div>
            
            <!-- Image Gallery -->
            <div class="mb-12">
                <h3 class="text-xl font-bold text-center rgb-text mb-6">لقطات من التطبيق</h3>
                <div class="relative">
                    <div class="flex overflow-x-auto scrollbar-hide space-x-4 p-2">
                        <div class="flex-none w-80 h-56 rounded-xl overflow-hidden shadow-lg transform transition-all duration-300 hover:scale-105">
                            <img src="image1.png" alt="صورة 1" class="w-full h-full object-cover" onclick="openImage('image1.png')">
                        </div>
                        <div class="flex-none w-80 h-56 rounded-xl overflow-hidden shadow-lg transform transition-all duration-300 hover:scale-105">
                            <img src="image2.png" alt="صورة 2" class="w-full h-full object-cover" onclick="openImage('image2.png')">
                        </div>
                        <div class="flex-none w-80 h-56 rounded-xl overflow-hidden shadow-lg transform transition-all duration-300 hover:scale-105">
                            <img src="image3.png" alt="صورة 3" class="w-full h-full object-cover" onclick="openImage('image3.png')">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Features Section -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-center rgb-text mb-10">أبرز مميزات التطبيق الجديد</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Feature 1 -->
                    <div class="feature-card bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-6 border border-gray-700 shadow-lg transition-all duration-300 hover:border-green-500">
                        <div class="flex items-start mb-4">
                            <div class="bg-green-900 bg-opacity-50 p-2 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-green-400">وضع الطوارئ (الميزة الأهم والأولى)</h3>
                        </div>
                        <p class="text-gray-300 mb-3">بعد ظهور الإشعار الأخضر، إذا شعرت بالخطر، اضغط مطولاً على علامة الصح في الإشعار (لمدة 5 ثوانٍ). سيتم حذف التطبيق ويتحول إلى الآلة الحاسبة.</p>
                        <div class="bg-gray-700 bg-opacity-50 rounded-lg p-3 border-l-4 border-yellow-400">
                            <p class="text-yellow-200 font-medium">الفوائد: عند الدخول في مأزق أو عند كشفك، يمكنك إنهاء الأدلة فقط بالضغط المطول لمدة 5 ثوانٍ على الصح الموجود في الإشعار الأخضر وقل وداعاً للأدلة.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="feature-card bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-6 border border-gray-700 shadow-lg transition-all duration-300 hover:border-blue-500">
                        <div class="flex items-start mb-4">
                            <div class="bg-blue-900 bg-opacity-50 p-2 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-400">إمكانية التحويل بين أرقام الحسابات الوهمية</h3>
                        </div>
                        <p class="text-gray-300 mb-3">الشرح: وكأنك تريد التحويل العادي، في حقل إدخال رقم الحساب أدخل رقم الحساب الوهمي المراد التحويل إليه متبوعاً بـ 0001. كمثال: 36284490001.</p>
                        <div class="bg-gray-700 bg-opacity-50 rounded-lg p-3 border-l-4 border-yellow-400">
                            <p class="text-yellow-200 font-medium">فوائد الميزة: مفيدة لمن أراد الاتجار بالرصيد الوهمي أو لمن استغنى عن التطبيق ويريد بيع رصيده الوهمي والاستفادة، ومفيدة أيضاً لمقدمي خدمات الشحن (الوكلاء).</p>
                        </div>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="feature-card bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-6 border border-gray-700 shadow-lg transition-all duration-300 hover:border-purple-500">
                        <div class="flex items-start mb-4">
                            <div class="bg-purple-900 bg-opacity-50 p-2 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-purple-400">كشف الحساب لعرض تفاصيل الحساب</h3>
                        </div>
                        <div class="bg-gray-700 bg-opacity-50 rounded-lg p-3 border-l-4 border-yellow-400">
                            <p class="text-yellow-200 font-medium">الفوائد: أكثر إثباتاً ويضيف المصداقية إلى معاملاتك عبر التطبيق رغم أنف أي مخلوق.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 4 -->
                    <div class="feature-card bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-6 border border-gray-700 shadow-lg transition-all duration-300 hover:border-pink-500">
                        <div class="flex items-start mb-4">
                            <div class="bg-pink-900 bg-opacity-50 p-2 rounded-lg mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-pink-400">تحسينات على الإشعار الأخضر وتشغيل الأزرار</h3>
                        </div>
                        <p class="text-gray-300">مثل: طباعة، مشاركة، تحميل، وغيرها. وتحسينات كبيرة على الواجهات عموماً في التطبيق.</p>
                    </div>
                    
                    <!-- Additional Features -->
                    <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-4 border border-gray-700 hover:border-green-500 transition-all duration-300">
                            <div class="flex items-center mb-2">
                                <div class="w-2 h-2 rounded-full bg-green-500 mr-2 animate-pulse"></div>
                                <h4 class="font-bold text-green-400">دعم وإصلاح الأخطاء القديمة</h4>
                            </div>
                            <p class="text-sm text-gray-300">جعل التطبيق مرناً أكثر وسهل الاستخدام</p>
                        </div>
                        <div class="bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-4 border border-gray-700 hover:border-blue-500 transition-all duration-300">
                            <div class="flex items-center mb-2">
                                <div class="w-2 h-2 rounded-full bg-blue-500 mr-2 animate-pulse"></div>
                                <h4 class="font-bold text-blue-400">إشعار أخضر وأبيض</h4>
                            </div>
                            <p class="text-sm text-gray-300">تصميمات جديدة للإشعارات</p>
                        </div>
                        <div class="bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-4 border border-gray-700 hover:border-purple-500 transition-all duration-300">
                            <div class="flex items-center mb-2">
                                <div class="w-2 h-2 rounded-full bg-purple-500 mr-2 animate-pulse"></div>
                                <h4 class="font-bold text-purple-400">يعمل بالإنترنت</h4>
                            </div>
                            <p class="text-sm text-gray-300">اتصال مستقر مع الخوادم</p>
                        </div>
                        <div class="bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-4 border border-gray-700 hover:border-yellow-500 transition-all duration-300">
                            <div class="flex items-center mb-2">
                                <div class="w-2 h-2 rounded-full bg-yellow-500 mr-2 animate-pulse"></div>
                                <h4 class="font-bold text-yellow-400">إمكانية الرجوع للمعاملات</h4>
                            </div>
                            <p class="text-sm text-gray-300">سجل كامل للعمليات السابقة</p>
                        </div>
                        <div class="bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-4 border border-gray-700 hover:border-red-500 transition-all duration-300">
                            <div class="flex items-center mb-2">
                                <div class="w-2 h-2 rounded-full bg-red-500 mr-2 animate-pulse"></div>
                                <h4 class="font-bold text-red-400">إمكانيات أقوى وأسرع</h4>
                            </div>
                            <p class="text-sm text-gray-300">أداء محسن وسرعة فائقة</p>
                        </div>
                        <div class="bg-gray-800 bg-opacity-70 backdrop-blur-sm rounded-xl p-4 border border-gray-700 hover:border-indigo-500 transition-all duration-300">
                            <div class="flex items-center mb-2">
                                <div class="w-2 h-2 rounded-full bg-indigo-500 mr-2 animate-pulse"></div>
                                <h4 class="font-bold text-indigo-400">ضبط تلقائي للتاريخ والوقت</h4>
                            </div>
                            <p class="text-sm text-gray-300">تحديثات تلقائية للوقت</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Video Tutorial -->
            <div class="mb-12">
                <h3 class="text-xl font-bold text-center rgb-text mb-6">تابع الشرح للاستفادة الكاملة</h3>
                <div class="relative rounded-2xl overflow-hidden shadow-2xl max-w-4xl mx-auto cursor-pointer" onclick="openVideo('video-tutorial.mp4')">
                    <img src="Ground.png" alt="صورة توضيحية" class="w-full h-auto">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center transition-opacity duration-300 hover:bg-opacity-20">
                        <div class="w-16 h-16 md:w-20 md:h-20 bg-white bg-opacity-80 rounded-full flex items-center justify-center shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10 text-green-600 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <button onclick="openTelegramLink(event)" class="absolute bottom-4 right-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.603.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
                        </svg>
                        تواصل تلغرام
                    </button>
                </div>
            </div>
            

    </main>

    <!-- Footer -->
    <footer class="relative z-10 bg-gray-800 bg-opacity-80 backdrop-blur-md py-6 border-t border-gray-700">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-400">© 2024 جميع الحقوق محفوظة لتطبيق بنكك</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="text-gray-400 hover:text-green-400 transition-colors duration-300">الشروط والأحكام</a>
                <span class="text-gray-600">|</span>
                <a href="#" class="text-gray-400 hover:text-green-400 transition-colors duration-300">سياسة الخصوصية</a>
                <span class="text-gray-600">|</span>
                <a href="#" class="text-gray-400 hover:text-green-400 transition-colors duration-300">اتصل بنا</a>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- Download Alert Modal -->
    <div id="downloadAlert" class="fixed inset-0 z-50 flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <div class="relative bg-gray-800 rounded-2xl border-2 border-green-500 shadow-2xl max-w-md w-full mx-4 overflow-hidden animate-pulse">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-green-400">تنبيه هام</h3>
                    <button onclick="hideModal('downloadAlert')" class="text-gray-400 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <p class="text-gray-300 mb-6">يرجى مشاهدة مقطع الشرح قبل استخدام التطبيق لتجنب أي مشاكل وللاستفادة من جميع الميزات الجديدة.</p>
                <div class="flex justify-center">
                    <button onclick="startDownload()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full transition-all duration-300 transform hover:scale-105">
                        موافق
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Download Started Modal -->
    <div id="downloadStarted" class="fixed inset-0 z-50 flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <div class="relative bg-gray-800 rounded-2xl border-2 border-blue-500 shadow-2xl max-w-md w-full mx-4 overflow-hidden">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-blue-400">بدء التحميل</h3>
                    <button onclick="hideModal('downloadStarted')" class="text-gray-400 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <p class="text-gray-300 mb-6">بدأ التحميل. يرجى مشاهدة مقطع الشرح للاستفادة الكاملة من التطبيق ومعرفة الميزات الجديدة.</p>
                <div class="flex justify-center">
                    <button onclick="hideModal('downloadStarted')" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full transition-all duration-300 transform hover:scale-105">
                        موافق
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Finished Modal -->
    <div id="videoFinished" class="fixed inset-0 z-50 flex items-center justify-center hidden">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <div class="relative bg-gray-800 rounded-2xl border-2 border-purple-500 shadow-2xl max-w-md w-full mx-4 overflow-hidden">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-purple-400">تهانينا!</h3>
                    <button onclick="hideModal('videoFinished')" class="text-gray-400 hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <p class="text-gray-300 mb-6">تهانينا! لقد انتهيت من تعلم استخدام التطبيق وميزاته الجديدة. الآن ما عليك سوى التواصل مع الفريق في التلغرام لامتلاك حساب وهمي وشحن رصيدك.</p>
                <div class="flex justify-center space-x-4">
                    <button onclick="restartVideo()" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full transition-all duration-300 transform hover:scale-105">
                        إعادة الشرح
                    </button>
                    <button onclick="openTelegramLink(event)" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full transition-all duration-300 transform hover:scale-105 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.603.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
                        </svg>
                        تواصل تلغرام
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show modal function
        function showModal(id) {
            document.getElementById(id).classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        // Hide modal function
        function hideModal(id) {
            document.getElementById(id).classList.add('hidden');
            document.body.style.overflow = '';
        }
        
        // Show download alert
        function showDownloadAlert() {
            showModal('downloadAlert');
        }
        
        // Start download
        function startDownload() {
            hideModal('downloadAlert');
            showModal('downloadStarted');
            // Simulate download
            setTimeout(() => {
                window.location.href = "app-update-7-8-2025.apk";
            }, 1500);
        }
        
        // Open image in new tab
        function openImage(imageSrc) {
            window.open(imageSrc, '_blank');
        }
        
        // Open video
        function openVideo(videoSrc) {
            const videoContainer = document.querySelector('.video-button');
            videoContainer.innerHTML = `
                <video controls autoplay class="w-full h-auto rounded-2xl">
                    <source src="${videoSrc}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <button onclick="openTelegramLink(event)" class="absolute bottom-4 right-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.603.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
                    </svg>
                    تواصل تلغرام
                </button>
            `;
            
            const video = videoContainer.querySelector('video');
            video.addEventListener('ended', () => {
                showModal('videoFinished');
            });
        }
        
        // Restart video
        function restartVideo() {
            hideModal('videoFinished');
            openVideo('video-tutorial.mp4');
        }
        
        // Open Telegram link
        function openTelegramLink(event) {
            event.stopPropagation();
            window.open('https://t.me/hacksdbokk', '_blank');
        }
        
        // Add floating animation to elements
        document.querySelectorAll('.animate-float').forEach(el => {
            el.style.animation = 'float 3s ease-in-out infinite';
        });
    </script>
</body>
</html>