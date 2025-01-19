@extends('welcome')
<!-- Styles / Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')
<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div
          class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
          <!-- Header -->
          <div class="px-6 py-4 border-b border-gray-200 dark:border-neutral-700">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
              Cryptocurrency Prices by Market Cap
            </h2>
            <p class="text-sm text-gray-600 dark:text-neutral-400">
              The global cryptocurrency market cap today is $1.09 Trillion, a <span class="text-green-500">0.5%</span>
              change in the last 24 hours.
            </p>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
            <thead class="bg-gray-50 dark:bg-neutral-800">
              <tr>
                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    #
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap min-w-64">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    Coin
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    Price
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    1h
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    24h
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    7d
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    24h Volume
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    Mkt Cap
                  </span>
                </th>

                <th scope="col" class="px-6 py-3 text-start whitespace-nowrap">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    Last 7 days
                  </span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              <tr>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <button type="button"
                    class="flex items-center gap-x-2 text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                    <span class="text-sm text-gray-800 dark:text-neutral-200">1</span>
                  </button>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <div class="flex items-center gap-x-3">
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="2500" height="2500"
                      viewBox="0.004 0 63.993 64">
                      <path
                        d="M63.04 39.741c-4.274 17.143-21.638 27.575-38.783 23.301C7.12 58.768-3.313 41.404.962 24.262 5.234 7.117 22.597-3.317 39.737.957c17.144 4.274 27.576 21.64 23.302 38.784z"
                        fill="#f7931a" />
                      <path
                        d="M46.11 27.441c.636-4.258-2.606-6.547-7.039-8.074l1.438-5.768-3.512-.875-1.4 5.616c-.922-.23-1.87-.447-2.812-.662l1.41-5.653-3.509-.875-1.439 5.766c-.764-.174-1.514-.346-2.242-.527l.004-.018-4.842-1.209-.934 3.75s2.605.597 2.55.634c1.422.355 1.68 1.296 1.636 2.042l-1.638 6.571c.098.025.225.061.365.117l-.37-.092-2.297 9.205c-.174.432-.615 1.08-1.609.834.035.051-2.552-.637-2.552-.637l-1.743 4.02 4.57 1.139c.85.213 1.683.436 2.502.646l-1.453 5.835 3.507.875 1.44-5.772c.957.26 1.887.5 2.797.726L27.504 50.8l3.511.875 1.453-5.823c5.987 1.133 10.49.676 12.383-4.738 1.527-4.36-.075-6.875-3.225-8.516 2.294-.531 4.022-2.04 4.483-5.157zM38.087 38.69c-1.086 4.36-8.426 2.004-10.807 1.412l1.928-7.729c2.38.594 10.011 1.77 8.88 6.317zm1.085-11.312c-.99 3.966-7.1 1.951-9.083 1.457l1.748-7.01c1.983.494 8.367 1.416 7.335 5.553z"
                        fill="#fff" />
                    </svg>
                    <span class="font-semibold text-sm text-gray-800 dark:text-white">Bitcoin</span>
                    <span class="text-xs text-gray-500 dark:text-neutral-500">BTC</span>
                  </div>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-gray-800 dark:text-white">$26,869.14</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-red-500">-0.1%</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-green-500">0.3%</span>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                  <span class="text-sm text-red-500">-3.8%</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-gray-800 dark:text-white">$15,438,433,675</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-gray-800 dark:text-white">$524,007,508,943</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <div class="inline-block">
                    <div id="hs-cryptocurrency-market-cap-1"></div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <button type="button"
                    class="flex items-center gap-x-2 text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                    <span class="text-sm text-gray-800 dark:text-neutral-200">2</span>
                  </button>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <div class="flex items-center gap-x-3">
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" height="2500"
                      viewBox="420.1 80.7 1079.8 1758.6" width="983">
                      <path d="m959.8 80.7-539.7 895.6 539.7-245.3z" fill="#8a92b2" />
                      <path d="m959.8 731-539.7 245.3 539.7 319.1zm539.8 245.3-539.8-895.6v650.3z" fill="#62688f" />
                      <path d="m959.8 1295.4 539.8-319.1-539.8-245.3z" fill="#454a75" />
                      <path d="m420.1 1078.7 539.7 760.6v-441.7z" fill="#8a92b2" />
                      <path d="m959.8 1397.6v441.7l540.1-760.6z" fill="#62688f" />
                    </svg>
                    <span class="font-semibold text-sm text-gray-800 dark:text-white">Ethereum</span>
                    <span class="text-xs text-gray-500 dark:text-neutral-500">ETH</span>
                  </div>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-gray-800 dark:text-white">$1,546.77</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-red-500">-0.2%</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-red-500">-0.1%</span>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                  <span class="text-sm text-red-500">-5.7%</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-gray-800 dark:text-white">$6,591,963,010</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-gray-800 dark:text-white">$185,955,678,121</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <div class="inline-block">
                    <div id="hs-cryptocurrency-market-cap-2"></div>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <button type="button"
                    class="flex items-center gap-x-2 text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <polygon
                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                    <span class="text-sm text-gray-800 dark:text-neutral-200">3</span>
                  </button>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <div class="flex items-center gap-x-3">
                    <svg class="shrink-0 size-5" width="49" height="40" viewBox="0 0 49 40" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10.5497 0H38.4507C39.1165 0 39.7315 0.356142 40.0635 0.933924L48.1922 15.0798C48.6137 15.8134 48.4885 16.7393 47.8872 17.3342L25.5127 39.4708C24.7879 40.1879 23.622 40.1879 22.8972 39.4708L0.552922 17.3641C-0.0623286 16.7554 -0.177538 15.8025 0.274888 15.0643L8.96384 0.888538C9.30224 0.336459 9.90273 0 10.5497 0ZM34.8482 6.31565V10.2848H26.9003V13.0367C32.4824 13.3308 36.6704 14.5386 36.7015 15.9863L36.7013 19.0044C36.6702 20.4521 32.4824 21.6599 26.9003 21.954V28.7075H21.6228V21.954C16.0407 21.6599 11.8527 20.4521 11.8217 19.0044L11.8218 15.9863C11.8529 14.5386 16.0407 13.3308 21.6228 13.0367V10.2848H13.6749V6.31565H34.8482ZM24.2616 19.8806C30.2186 19.8806 35.1977 18.8593 36.4162 17.4954C35.3829 16.3388 31.6453 15.4285 26.9003 15.1785V18.0598C26.0499 18.1046 25.167 18.1282 24.2616 18.1282C23.3561 18.1282 22.4733 18.1046 21.6228 18.0598V15.1785C16.8778 15.4285 13.1402 16.3388 12.1069 17.4954C13.3254 18.8593 18.3045 19.8806 24.2616 19.8806Z"
                        fill="#009393" />
                    </svg>
                    <span class="font-semibold text-sm text-gray-800 dark:text-white">Tether</span>
                    <span class="text-xs text-gray-500 dark:text-neutral-500">USDT</span>
                  </div>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-gray-800 dark:text-white">$0.999970</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-green-500">0.0%</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-green-500">0.0%</span>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                  <span class="text-sm text-red-500">-0.1%</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-gray-800 dark:text-white">$19,869,550,292</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <span class="text-sm text-gray-800 dark:text-white">$83,526,487,241</span>
                </td>
                <td class="size-px whitespace-nowrap px-6 py-3">
                  <div class="inline-block">
                    <div id="hs-cryptocurrency-market-cap-3"></div>
                  </div>
                </td>
            </tbody>

          </table>
          <!-- End Table -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->

<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Card -->
    <div
      class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
      <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
        <svg class="size-28" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="56" height="56" rx="10" fill="white" />
          <path
            d="M20.2819 26.7478C20.1304 26.5495 19.9068 26.4194 19.6599 26.386C19.4131 26.3527 19.1631 26.4188 18.9647 26.5698C18.848 26.6622 18.7538 26.78 18.6894 26.9144L10.6019 43.1439C10.4874 43.3739 10.4686 43.6401 10.5496 43.884C10.6307 44.1279 10.805 44.3295 11.0342 44.4446C11.1681 44.5126 11.3163 44.5478 11.4664 44.5473H22.7343C22.9148 44.5519 23.0927 44.5037 23.2462 44.4084C23.3998 44.3132 23.5223 44.1751 23.5988 44.011C26.0307 38.9724 24.5566 31.3118 20.2819 26.7478Z"
            fill="url(#paint0_linear_2204_541)" />
          <path
            d="M28.2171 11.9791C26.201 15.0912 25.026 18.6755 24.8074 22.3805C24.5889 26.0854 25.3342 29.7837 26.9704 33.1126L32.403 44.0113C32.4833 44.1724 32.6067 44.3079 32.7593 44.4026C32.912 44.4973 33.088 44.5475 33.2675 44.5476H44.5331C44.6602 44.5479 44.7861 44.523 44.9035 44.4743C45.0209 44.4257 45.1276 44.3543 45.2175 44.2642C45.3073 44.1741 45.3785 44.067 45.427 43.9492C45.4755 43.8314 45.5003 43.7052 45.5 43.5777C45.5001 43.4274 45.4659 43.2791 45.3999 43.1441L29.8619 11.9746C29.7881 11.8184 29.6717 11.6864 29.5261 11.594C29.3805 11.5016 29.2118 11.4525 29.0395 11.4525C28.8672 11.4525 28.6984 11.5016 28.5529 11.594C28.4073 11.6864 28.2908 11.8184 28.2171 11.9746V11.9791Z"
            fill="#2684FF" />
          <defs>
            <linearGradient id="paint0_linear_2204_541" x1="24.734" y1="29.2284" x2="16.1543" y2="44.0429"
              gradientUnits="userSpaceOnUse">
              <stop offset="0%" stop-color="#0052CC" />
              <stop offset="0.92" stop-color="#2684FF" />
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="p-4 md:p-6">
        <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
          Atlassian API
        </span>
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
          Atlassian
        </h3>
        <p class="mt-3 text-gray-500 dark:text-neutral-500">
          A software that develops products for software developers and developments.
        </p>
      </div>
      <div
        class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
          href="#">
          View sample
        </a>
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
          href="#">
          View API
        </a>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div
      class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
      <div class="h-52 flex flex-col justify-center items-center bg-rose-500 rounded-t-xl">
        <svg class="size-28" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="56" height="56" rx="10" fill="white" />
          <g clip-path="url(#clip0_2204_541)">
            <path
              d="M37.0409 28.8697C33.1968 28.8697 30.0811 31.9854 30.0811 35.8288C30.0811 39.6726 33.1968 42.789 37.0409 42.789C40.8843 42.789 44 39.6726 44 35.8288C44 31.9854 40.8843 28.8697 37.0409 28.8697ZM18.9594 28.8701C15.116 28.8704 12 31.9854 12 35.8292C12 39.6726 15.116 42.7886 18.9594 42.7886C22.8032 42.7886 25.9192 39.6726 25.9192 35.8292C25.9192 31.9854 22.8032 28.8701 18.9591 28.8701H18.9594ZM34.9595 20.1704C34.9595 24.0138 31.8438 27.1305 28.0004 27.1305C24.1563 27.1305 21.0406 24.0138 21.0406 20.1704C21.0406 16.3269 24.1563 13.2109 28.0003 13.2109C31.8438 13.2109 34.9591 16.3269 34.9591 20.1704H34.9595Z"
              fill="url(#paint0_radial_2204_541)" />
          </g>
          <defs>
            <radialGradient id="paint0_radial_2204_541" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
              gradientTransform="translate(28.0043 29.3944) scale(21.216 19.6102)">
              <stop offset="0%" stop-color="#FFB900" />
              <stop offset="0.6" stop-color="#F95D8F" />
              <stop offset="0.999" stop-color="#F95353" />
            </radialGradient>
            <clipPath id="clip0_2204_541">
              <rect width="32" height="29.5808" fill="white" transform="translate(12 13.2096)" />
            </clipPath>
          </defs>
        </svg>
      </div>
      <div class="p-4 md:p-6">
        <span class="block mb-1 text-xs font-semibold uppercase text-rose-600 dark:text-rose-500">
          Asana API
        </span>
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
          Asana
        </h3>
        <p class="mt-3 text-gray-500 dark:text-neutral-500">
          Track tasks and projects, use agile boards, measure progress.
        </p>
      </div>
      <div
        class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
          href="#">
          View sample
        </a>
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
          href="#">
          View API
        </a>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div
      class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
      <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
        <svg class="size-28" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="56" height="56" rx="10" fill="white" />
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M23.7326 11.968C21.9637 11.9693 20.5321 13.4049 20.5334 15.1738C20.5321 16.9427 21.965 18.3782 23.7339 18.3795H26.9345V15.1751C26.9358 13.4062 25.5029 11.9706 23.7326 11.968C23.7339 11.968 23.7339 11.968 23.7326 11.968M23.7326 20.5184H15.2005C13.4316 20.5197 11.9987 21.9553 12 23.7242C11.9974 25.4931 13.4303 26.9286 15.1992 26.9312H23.7326C25.5016 26.9299 26.9345 25.4944 26.9332 23.7255C26.9345 21.9553 25.5016 20.5197 23.7326 20.5184V20.5184Z"
            fill="#36C5F0" />
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M44.0001 23.7242C44.0014 21.9553 42.5684 20.5197 40.7995 20.5184C39.0306 20.5197 37.5977 21.9553 37.599 23.7242V26.9312H40.7995C42.5684 26.9299 44.0014 25.4944 44.0001 23.7242ZM35.4666 23.7242V15.1738C35.4679 13.4062 34.0363 11.9706 32.2674 11.968C30.4985 11.9693 29.0656 13.4049 29.0669 15.1738V23.7242C29.0643 25.4931 30.4972 26.9286 32.2661 26.9312C34.035 26.9299 35.4679 25.4944 35.4666 23.7242Z"
            fill="#2EB67D" />
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M32.2661 44.0322C34.035 44.0309 35.4679 42.5953 35.4666 40.8264C35.4679 39.0575 34.035 37.622 32.2661 37.6207H29.0656V40.8264C29.0642 42.594 30.4972 44.0295 32.2661 44.0322ZM32.2661 35.4804H40.7995C42.5684 35.4791 44.0013 34.0436 44 32.2747C44.0026 30.5058 42.5697 29.0702 40.8008 29.0676H32.2674C30.4985 29.0689 29.0656 30.5045 29.0669 32.2734C29.0656 34.0436 30.4972 35.4791 32.2661 35.4804V35.4804Z"
            fill="#ECB22E" />
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M12 32.2746C11.9987 34.0435 13.4316 35.479 15.2005 35.4804C16.9694 35.479 18.4024 34.0435 18.401 32.2746V29.0688H15.2005C13.4316 29.0702 11.9987 30.5057 12 32.2746ZM20.5334 32.2746V40.825C20.5308 42.5939 21.9637 44.0295 23.7326 44.0321C25.5016 44.0308 26.9345 42.5952 26.9332 40.8263V32.2772C26.9358 30.5083 25.5029 29.0728 23.7339 29.0702C21.9637 29.0702 20.5321 30.5057 20.5334 32.2746C20.5334 32.2759 20.5334 32.2746 20.5334 32.2746Z"
            fill="#E01E5A" />
        </svg>
      </div>
      <div class="p-4 md:p-6">
        <span class="block mb-1 text-xs font-semibold uppercase text-amber-500">
          Slack API
        </span>
        <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
          Slack
        </h3>
        <p class="mt-3 text-gray-500 dark:text-neutral-500">
          Email collaboration and email service desk made easy.
        </p>
      </div>
      <div
        class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
          href="#">
          View sample
        </a>
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
          href="#">
          View API
        </a>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->
@endsection