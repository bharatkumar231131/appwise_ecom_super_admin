@extends('components.admin.layouts')
@section('content')
<div class="container pb-6">
    <div class="py-5">
        <div class="row g-4 align-items-center">
            <div class="col">
                <h1 class="h3 m-0">Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="row g-4 g-xl-5">
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1 saw-indicator--size--lg"
                data-sa-container-query="{&quot;340&quot;:&quot;saw-indicator--size--lg&quot;}">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Sections</h2>
                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">8</div>
                    <div class="text-end">
                        <svg class="svg-inline--fa fa-cube fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="cube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M239.1 6.3l-208 78c-18.7 7-31.1 25-31.1 45v225.1c0 18.2 10.3 34.8 26.5 42.9l208 104c13.5 6.8 29.4 6.8 42.9 0l208-104c16.3-8.1 26.5-24.8 26.5-42.9V129.3c0-20-12.4-37.9-31.1-44.9l-208-78C262 2.2 250 2.2 239.1 6.3zM256 68.4l192 72v1.1l-192 78-192-78v-1.1l192-72zm32 356V275.5l160-65v133.9l-160 80z">
                            </path>
                        </svg><!-- <i class="fas fa-cube"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1 saw-indicator--size--lg"
                data-sa-container-query="{&quot;340&quot;:&quot;saw-indicator--size--lg&quot;}">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Categories</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">14</div>
                    <div class="text-end"><svg class="svg-inline--fa fa-th fa-w-16" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="th" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M149.333 56v80c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24h101.333c13.255 0 24 10.745 24 24zm181.334 240v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.256 0 24.001-10.745 24.001-24zm32-240v80c0 13.255 10.745 24 24 24H488c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24zm-32 80V56c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.256 0 24.001-10.745 24.001-24zm-205.334 56H24c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24zM0 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H24c-13.255 0-24 10.745-24 24zm386.667-56H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zm0 160H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zM181.333 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1 saw-indicator--size--lg"
                data-sa-container-query="{&quot;340&quot;:&quot;saw-indicator--size--lg&quot;}">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Orders</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">135</div>
                    <div class="text-end">
                        <svg class="svg-inline--fa fa-dolly-flatbed fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="dolly-flatbed" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M208 320h384c8.8 0 16-7.2 16-16V48c0-8.8-7.2-16-16-16H448v128l-48-32-48 32V32H208c-8.8 0-16 7.2-16 16v256c0 8.8 7.2 16 16 16zm416 64H128V16c0-8.8-7.2-16-16-16H16C7.2 0 0 7.2 0 16v32c0 8.8 7.2 16 16 16h48v368c0 8.8 7.2 16 16 16h82.9c-1.8 5-2.9 10.4-2.9 16 0 26.5 21.5 48 48 48s48-21.5 48-48c0-5.6-1.2-11-2.9-16H451c-1.8 5-2.9 10.4-2.9 16 0 26.5 21.5 48 48 48s48-21.5 48-48c0-5.6-1.2-11-2.9-16H624c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16z">
                            </path>
                        </svg><!-- <i class="fas fa-dolly-flatbed"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1 saw-indicator--size--lg"
                data-sa-container-query="{&quot;340&quot;:&quot;saw-indicator--size--lg&quot;}">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Coupons</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">13</div>
                    <div class="text-end">
                        <svg class="svg-inline--fa fa-ticket-alt fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="ticket-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M128 160h320v192H128V160zm400 96c0 26.51 21.49 48 48 48v96c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48v-96c26.51 0 48-21.49 48-48s-21.49-48-48-48v-96c0-26.51 21.49-48 48-48h480c26.51 0 48 21.49 48 48v96c-26.51 0-48 21.49-48 48zm-48-104c0-13.255-10.745-24-24-24H120c-13.255 0-24 10.745-24 24v208c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24V152z">
                            </path>
                        </svg><!-- <i class="fas fa-ticket-alt"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1 saw-indicator--size--lg"
                data-sa-container-query="{&quot;340&quot;:&quot;saw-indicator--size--lg&quot;}">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Products</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">18</div>
                    <div class="text-end">
                        <svg class="svg-inline--fa fa-box-open fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="box-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M425.7 256c-16.9 0-32.8-9-41.4-23.4L320 126l-64.2 106.6c-8.7 14.5-24.6 23.5-41.5 23.5-4.5 0-9-.6-13.3-1.9L64 215v178c0 14.7 10 27.5 24.2 31l216.2 54.1c10.2 2.5 20.9 2.5 31 0L551.8 424c14.2-3.6 24.2-16.4 24.2-31V215l-137 39.1c-4.3 1.3-8.8 1.9-13.3 1.9zm212.6-112.2L586.8 41c-3.1-6.2-9.8-9.8-16.7-8.9L320 64l91.7 152.1c3.8 6.3 11.4 9.3 18.5 7.3l197.9-56.5c9.9-2.9 14.7-13.9 10.2-23.1zM53.2 41L1.7 143.8c-4.6 9.2.3 20.2 10.1 23l197.9 56.5c7.1 2 14.7-1 18.5-7.3L320 64 69.8 32.1c-6.9-.8-13.5 2.7-16.6 8.9z">
                            </path>
                        </svg><!-- <i class="fas fa-box-open"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1 saw-indicator--size--lg"
                data-sa-container-query="{&quot;340&quot;:&quot;saw-indicator--size--lg&quot;}">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Brands</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">8</div>
                    <div class="text-end">
                        <svg class="svg-inline--fa fa-certificate fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="certificate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M458.622 255.92l45.985-45.005c13.708-12.977 7.316-36.039-10.664-40.339l-62.65-15.99 17.661-62.015c4.991-17.838-11.829-34.663-29.661-29.671l-61.994 17.667-15.984-62.671C337.085.197 313.765-6.276 300.99 7.228L256 53.57 211.011 7.229c-12.63-13.351-36.047-7.234-40.325 10.668l-15.984 62.671-61.995-17.667C74.87 57.907 58.056 74.738 63.046 92.572l17.661 62.015-62.65 15.99C.069 174.878-6.31 197.944 7.392 210.915l45.985 45.005-45.985 45.004c-13.708 12.977-7.316 36.039 10.664 40.339l62.65 15.99-17.661 62.015c-4.991 17.838 11.829 34.663 29.661 29.671l61.994-17.667 15.984 62.671c4.439 18.575 27.696 24.018 40.325 10.668L256 458.61l44.989 46.001c12.5 13.488 35.987 7.486 40.325-10.668l15.984-62.671 61.994 17.667c17.836 4.994 34.651-11.837 29.661-29.671l-17.661-62.015 62.65-15.99c17.987-4.302 24.366-27.367 10.664-40.339l-45.984-45.004z">
                            </path>
                        </svg><!-- <i class="fas fa-certificate"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1 saw-indicator--size--lg"
                data-sa-container-query="{&quot;340&quot;:&quot;saw-indicator--size--lg&quot;}">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Users</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">28</div>
                    <div class="text-end">
                        <svg class="svg-inline--fa fa-users fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z">
                            </path>
                        </svg><!-- <i class="fas fa-users"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1 saw-indicator--size--lg"
                data-sa-container-query="{&quot;340&quot;:&quot;saw-indicator--size--lg&quot;}">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Total Subscribers</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">0</div>
                    <div class="text-end">
                        <svg class="svg-inline--fa fa-users-cog fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="users-cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                            data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M610.5 341.3c2.6-14.1 2.6-28.5 0-42.6l25.8-14.9c3-1.7 4.3-5.2 3.3-8.5-6.7-21.6-18.2-41.2-33.2-57.4-2.3-2.5-6-3.1-9-1.4l-25.8 14.9c-10.9-9.3-23.4-16.5-36.9-21.3v-29.8c0-3.4-2.4-6.4-5.7-7.1-22.3-5-45-4.8-66.2 0-3.3.7-5.7 3.7-5.7 7.1v29.8c-13.5 4.8-26 12-36.9 21.3l-25.8-14.9c-2.9-1.7-6.7-1.1-9 1.4-15 16.2-26.5 35.8-33.2 57.4-1 3.3.4 6.8 3.3 8.5l25.8 14.9c-2.6 14.1-2.6 28.5 0 42.6l-25.8 14.9c-3 1.7-4.3 5.2-3.3 8.5 6.7 21.6 18.2 41.1 33.2 57.4 2.3 2.5 6 3.1 9 1.4l25.8-14.9c10.9 9.3 23.4 16.5 36.9 21.3v29.8c0 3.4 2.4 6.4 5.7 7.1 22.3 5 45 4.8 66.2 0 3.3-.7 5.7-3.7 5.7-7.1v-29.8c13.5-4.8 26-12 36.9-21.3l25.8 14.9c2.9 1.7 6.7 1.1 9-1.4 15-16.2 26.5-35.8 33.2-57.4 1-3.3-.4-6.8-3.3-8.5l-25.8-14.9zM496 368.5c-26.8 0-48.5-21.8-48.5-48.5s21.8-48.5 48.5-48.5 48.5 21.8 48.5 48.5-21.7 48.5-48.5 48.5zM96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm224 32c1.9 0 3.7-.5 5.6-.6 8.3-21.7 20.5-42.1 36.3-59.2 7.4-8 17.9-12.6 28.9-12.6 6.9 0 13.7 1.8 19.6 5.3l7.9 4.6c.8-.5 1.6-.9 2.4-1.4 7-14.6 11.2-30.8 11.2-48 0-61.9-50.1-112-112-112S208 82.1 208 144c0 61.9 50.1 112 112 112zm105.2 194.5c-2.3-1.2-4.6-2.6-6.8-3.9-8.2 4.8-15.3 9.8-27.5 9.8-10.9 0-21.4-4.6-28.9-12.6-18.3-19.8-32.3-43.9-40.2-69.6-10.7-34.5 24.9-49.7 25.8-50.3-.1-2.6-.1-5.2 0-7.8l-7.9-4.6c-3.8-2.2-7-5-9.8-8.1-3.3.2-6.5.6-9.8.6-24.6 0-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h255.4c-3.7-6-6.2-12.8-6.2-20.3v-9.2zM173.1 274.6C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z">
                            </path>
                        </svg><!-- <i class="fas fa-users-cog"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex">
            <div class="card saw-indicator flex-grow-1 saw-indicator--size--lg"
                data-sa-container-query="{&quot;340&quot;:&quot;saw-indicator--size--lg&quot;}">
                <div class="sa-widget-header saw-indicator__header">
                    <h2 class="sa-widget-header__title">Active users</h2>

                </div>
                <div class="saw-indicator__body">
                    <div class="text-start saw-indicator__value">15</div>
                    <div class="text-end">
                        <svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas"
                            data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                            </path>
                        </svg><!-- <i class="fas fa-user"></i> Font Awesome fontawesome.com -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection