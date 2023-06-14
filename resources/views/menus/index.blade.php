
{{-- General Menu - Menu yang bisa diakses tanpa role permissions --}}
@include('menus.general')

{{-- Spesific Menu - Menu yang bisa diakses dengan role permissions --}}
@include('menus.spesific')


{{-- Developer Menu - Menu yang bisa diakses developer --}}
@include('menus.developer')
