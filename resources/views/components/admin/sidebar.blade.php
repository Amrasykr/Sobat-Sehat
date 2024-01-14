<!-- Sidebar -->
<div id="application-sidebar-brand"
    class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-cyan-500 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500">
    <div class="px-6">
        <img class="w-32" src="{{ asset('./images/logo/logo.png') }}" alt="logo">
    </div>

    <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            <!-- Dashboard Link -->
            <li>
                <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }} custom-nav-link"
                    href="{{ route('admin.dashboard') }}">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <!-- Activities Accordion -->
            <li class="{{ request()->routeIs('admin.activities*') ? 'active' : '' }} hs-accordion"
                id="activities-accordion">
                <button type="button"
                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-white hs-accordion-active:hover:bg-transparent text-sm text-white hover:text-white rounded-lg hover:bg-cyan-600">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                        <line x1="16" x2="16" y1="2" y2="6" />
                        <line x1="8" x2="8" y1="2" y2="6" />
                        <line x1="3" x2="21" y1="10" y2="10" />
                        <path d="M8 14h.01" />
                        <path d="M12 14h.01" />
                        <path d="M16 14h.01" />
                        <path d="M8 18h.01" />
                        <path d="M12 18h.01" />
                        <path d="M16 18h.01" />
                    </svg>
                    Kegiatan

                    <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="activities-accordion-child"
                    class="{{ request()->routeIs('admin.activities*') ? '' : 'hidden' }} hs-accordion-content w-full overflow-hidden transition-[height] duration-300">
                    <ul class="pt-2 ps-2">
                        <li>
                            <a class="{{ request()->routeIs('admin.activities') ? 'active' : '' }} custom-nav-link"
                                href="{{ route('admin.activities') }}">
                                Semua Kegiatan
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('admin.activities.create') ? 'active' : '' }} custom-nav-link"
                                href="{{ route('admin.activities.create') }}">
                                Tambah Kegiatan
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- News Accordion -->
            @if(auth()->check() && auth()->user()->role === 'admin')
            <li class="{{ request()->routeIs('admin.news*') ? 'active' : '' }} hs-accordion" id="news-accordion">
                <button type="button"
                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-white hs-accordion-active:hover:bg-transparent text-sm text-white hover:text-white rounded-lg hover:bg-cyan-600">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                        <line x1="16" x2="16" y1="2" y2="6" />
                        <line x1="8" x2="8" y1="2" y2="6" />
                        <line x1="3" x2="21" y1="10" y2="10" />
                        <path d="M8 14h.01" />
                        <path d="M12 14h.01" />
                        <path d="M16 14h.01" />
                        <path d="M8 18h.01" />
                        <path d="M12 18h.01" />
                        <path d="M16 18h.01" />
                    </svg>
                    Berita

                    <svg class="hs-accordion-active:block ms-auto hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg class="hs-accordion-active:hidden ms-auto block w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div id="news-accordion-child"
                    class="{{ request()->routeIs('admin.news*') ? '' : 'hidden' }} hs-accordion-content w-full overflow-hidden transition-[height] duration-300">
                    <ul class="pt-2 ps-2">
                        <li>
                            <a class="{{ request()->routeIs('admin.news') ? 'active' : '' }} custom-nav-link"
                                href="{{ route('admin.news') }}">
                                Semua Berita
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('admin.news.create') ? 'active' : '' }} custom-nav-link"
                                href="{{ route('admin.news.create') }}">
                                Tambah Berita
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Contributor Link -->
            <li>
                <a class="{{ request()->routeIs('admin.validation') ? 'active' : '' }} w-full custom-nav-link"
                    href="{{ route('admin.validation') }}">
                    <svg class="flex-shrink-0 mt-0.5 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="18" cy="15" r="3" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                        <path d="m21.7 16.4-.9-.3" />
                        <path d="m15.2 13.9-.9-.3" />
                        <path d="m16.6 18.7.3-.9" />
                        <path d="m19.1 12.2.3-.9" />
                        <path d="m19.6 18.7-.4-1" />
                        <path d="m16.8 12.3-.4-1" />
                        <path d="m14.3 16.6 1-.4" />
                        <path d="m20.7 13.8 1-.4" />
                    </svg>
                    Kelola Kontributor
                </a>
            </li>
            @endif
        </ul>
    </nav>
</div>
<!-- End Sidebar -->
