@extends('layouts.app')
@section('content')
    <div id="menuIndex">
        <div class="scrollable menu">
            <div class="grid grid-cols-6 gap-8">
                <div class="col-span-4">
                    <div class="card" style="width: 100%; height: 100vh">
                        <div class="weekdays flex content-center justify-between">
                            <a class="" href="#">Lun</a>
                            <a class="" href="#">Mar</a>
                            <a class="" href="#">Mer</a>
                            <a class="" href="#">Jeu</a>
                            <a class="" href="#">Ven</a>
                            <a class="" href="#">Sam</a>
                            <a class="" href="#">Dim</a>
                        </div>
                        <div class="scrollable-menu">
                            menu
                            <div v-for="day in menu.days">
                                <ul>
                                    <li>Lunch : @{{ day.lunch.title }}</li>
                                    <li>Dinner : @{{ day.dinner.title }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="card" style="background: red; width: 100%; height: 100vh">
                        gfgdf
                    </div>
                </div>
            </div>
        </div>
        <div class="left-navbar">

        </div>
    </div>
@endsection
@push('scripts')
    <script>
        Vue.createApp({
            data() {
                return {
                    menu: {!! json_encode($menu) !!},
                }
            },
        }).mount('#menuIndex')
    </script>
@endpush
