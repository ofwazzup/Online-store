@section('head')
    Spices and Seasonings - Настройки аккаунта
@endsection
<x-app-layout>
    <div class="container">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto space-y-6">
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="edit">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="edit">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg delete-acc">
                            <div class="edit">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
    </div>   
</x-app-layout>
