<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <aside>
<div>
  <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-900/80" aria-hidden="true"></div>

    <div class="fixed inset-0 flex">
      <div class="relative mr-16 flex w-full max-w-xs flex-1">
        <div class="absolute top-0 left-full flex w-16 justify-center pt-5">
          <button type="button" class="-m-2.5 p-2.5">
            <span class="sr-only">Close sidebar</span>
            <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-2">
          <div class="flex h-16 shrink-0 items-center">
            <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
          </div>
          <nav class="flex flex-1 flex-col">
            <ul role="list" class="flex flex-1 flex-col gap-y-7">
              <li>
                <ul role="list" class="-mx-2 space-y-1">
                  <li>
                    <a href="#" class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-sm/6 font-semibold text-indigo-600">
                      <svg class="size-6 shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                      Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                      <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                      </svg>
                      Users
                    </a>
                  </li>
                 
              <li>
                <div class="text-xs/6 font-semibold text-gray-400">Your teams</div>
                <ul role="list" class="-mx-2 mt-2 space-y-1">
                  <li>
                    <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                    <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                      <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">H</span>
                      <span class="truncate">Heroicons</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                      <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">T</span>
                      <span class="truncate">Tailwind Labs</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                      <span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">W</span>
                      <span class="truncate">Workcation</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6">
      <div class="flex h-16 shrink-0 items-center">
        <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      </div>
      <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
          <li>
            <ul role="list" class="-mx-2 space-y-1">
              <li>
                <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                <a href="#" class="group flex gap-x-3 rounded-md bg-gray-50 p-2 text-sm/6 font-semibold text-indigo-600">
                  <svg class="size-6 shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                  <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                  </svg>
                  Users
                </a>
              </li>
              <li>
                <a href="book.php" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                  <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                  </svg>
                  Books
                </a>
              </li>
            </ul>
          </li>
          <li class="-mx-6 mt-auto">
            <a href="#" class="flex items-center gap-x-4 px-6 py-3 text-sm/6 font-semibold text-gray-900 hover:bg-gray-50">
              <img class="size-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <span class="sr-only">Your profile</span>
              <span aria-hidden="true">admin</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-white px-4 py-4 shadow-xs sm:px-6 lg:hidden">
    <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
      <span class="sr-only">Open sidebar</span>
      <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>
    <div class="flex-1 text-sm/6 font-semibold text-gray-900">Dashboard</div>
    <a href="#">
      <span class="sr-only">Your profile</span>
      <img class="size-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
    </a>
  </div>

  <main class="lg:pl-72">
    <div class="xl:pr-96">
      <div class="px-4 py-10 sm:px-6 lg:px-8 lg:py-6">
        <!-- Main area -->
      </div>
    </div>
  </main>

 
</div>

    </aside>
    <main>
    <div class="bg-gray-50 ml-20 py-24 sm:py-32">
            <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-center text-base/7 font-semibold text-indigo-600">Dashboard</h2>
                <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">Welcome to the admin Panel</p>
                <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Mobile friendly</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                    </div>
                    <div class="@container relative min-h-[30rem] w-full grow max-lg:mx-auto max-lg:max-w-sm">
                        <div class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                        <img class="size-full object-cover object-top" src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-mobile-friendly.png" alt="">
                        </div>
                    </div>
                    </div>
                    <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 lg:rounded-l-[2rem]"></div>
                </div>
                <div class="relative max-lg:row-start-1">
                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Performance</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit maiores impedit.</p>
                    </div>
                    <div class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
                        <img class="w-full max-lg:max-w-xs" src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-performance.png" alt="">
                    </div>
                    </div>
                    <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-t-[2rem]"></div>
                </div>
                <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                    <div class="absolute inset-px rounded-lg bg-white"></div>
                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Security</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi.</p>
                    </div>
                    <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                        <img class="h-[min(152px,40cqw)] object-cover" src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-security.png" alt="">
                    </div>
                    </div>
                    <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5"></div>
                </div>
                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Powerful APIs</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                    </div>
                    <div class="relative min-h-[30rem] w-full grow">
                        <div class="absolute top-10 right-0 bottom-0 left-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl">
                        <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                            <div class="-mb-px flex text-sm/6 font-medium text-gray-400">
                            <div class="border-r border-b border-r-white/10 border-b-white/20 bg-white/5 px-4 py-2 text-white">NotificationSetting.jsx</div>
                            <div class="border-r border-gray-600/10 px-4 py-2">App.jsx</div>
                            </div>
                        </div>
                        <div class="px-6 pt-6 pb-14">
                            <!-- Your code example -->
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="pointer-events-none absolute inset-px rounded-lg ring-1 shadow-sm ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>