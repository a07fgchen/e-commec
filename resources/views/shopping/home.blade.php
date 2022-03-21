<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/fddd0449b0.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    {{-- @routes --}}
    <script src="{{ mix('js/app.js') }}" defer></script>

    <title>購物車</title>
</head>

<body>
    <nav class="w-full bg-slate-700 px-3 py-2 shadow-2xl">
        <div class="container mx-auto flex flex-row 
        items-center text-slate-100">
            <div class="basis-1/4 px-3">
                <span class="text-5xl">Logo</span>
            </div>
            <div class="basis-1/2 px-3">
                <form>
                    <input type="submit"
                        class="rounded-md bg-slate-100 p-1 
                    text-slate-700
                    border-slate-700 border-2
                    focus:border-sky-500"
                        value="搜尋">
                    <label for="keyword">
                        <input type="search" value="search"
                            class="rounded-md text-slate-700 
                        focus:border-sky-500" required>
                    </label>
                </form>
            </div>
            <div class="basis-1/4 px-3">
                <a href="/login">登入</a>
                <a href="#">購物車</a>
                <a href="#">小鈴鐺 </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="flex flex-row flex-wap py-10">
            <aside class="w-full sm:w-1/3 md:1/4 px-2">
                <div
                    class="sticky top-0 py-4 w-full rounded-md ring-1 ring-slate-900/5 bg-slate-700 text-slate-100 text-center px-1">
                    <h4>分類</h4>
                    <hr>
                    <ul>
                        <li
                            class="py-2 mt-1 rounded bg-slate-100 group hover:bg-sky-500 border border-solid border-sky-500">
                            <a href="#" class="text-slate-600 group-hover:text-slate-100">熱門</a>
                        </li>
                        <li
                            class="py-2 mt-1 rounded bg-slate-100 group hover:bg-sky-500 border border-solid border-sky-500">
                            <a href="#" class="text-slate-600 group-hover:text-slate-100">活動</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <main role="main" class="w-full sm:w-2/3 md:w-3/4">
                <div class="flex flex-row flex-wap">
                    <a href="#"
                        class="group block max-w-1/3 ring-1 ring-slate-900/5 rounded-lg p-3 mx-3 shadow-lg space-y-3 hover:ring-sky-500 hover:ring">
                        <div class="flex items-center space-x-3">
                            <span>商品名稱</span>
                            <span>Add +</span>
                        </div>
                        <p class="text-slate-500 text-sm">
                            商品描述
                        </p>
                    </a>
                    <a href="#"
                        class="group block max-w-1/3 ring-1 ring-slate-900/5 rounded-lg p-3 mx-3 shadow-lg space-y-3 hover:ring-sky-500 hover:ring">
                        <div class="flex items-center space-x-3">
                            <span>商品名稱</span>
                            <span>Add +</span>
                        </div>
                        <p class="text-slate-500 text-sm">
                            商品描述
                        </p>
                    </a>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
