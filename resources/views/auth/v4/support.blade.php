@extends('auth.v4.layouts.dashboard')
@section('title', 'Transfer Funds')


@section('content')
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900 p-6" x-data="{
        showSuccess: false,
        showError: false,
        isSubmitting: false,
        message: '',
        showContactModal: false
    }">
        <div class="max-w-4xl mx-auto">
            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center space-x-4 mb-6">
                    <div
                        class="w-16 h-16 rounded-3xl bg-gradient-to-br from-blue-500/10 to-indigo-500/10 flex items-center justify-center backdrop-blur-sm">
                        <i data-lucide="headphones" class="w-8 h-8 text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <div>
                        <h1 class="text-4xl font-light text-gray-800 dark:text-white mb-2">
                            Support Center
                        </h1>
                        <p class="text-gray-500 dark:text-gray-400 font-light text-lg">
                            We're here to help you with any questions or concerns
                        </p>
                    </div>
                </div>
            </div>

            <!-- Alert Components -->
             <!-- Alert Messages -->
            <div class="mb-6">
                <div>
                    @if (session('error'))
                        <div class="mb-4 sm:mb-6">
                            <div class="bg-red-50 dark:bg-red-900/20 border-l-4 border-red-400 p-3 sm:p-4 rounded-lg shadow-sm"
                                x-data="{ show: true }" x-show="show">
                                <div class="flex items-start sm:items-center">
                                    <div class="flex-shrink-0">
                                        <i data-lucide="alert-circle"
                                            class="h-4 w-4 sm:h-5 sm:w-5 text-red-400 mt-0.5 sm:mt-0"></i>
                                    </div>
                                    <div class="ml-2 sm:ml-3 flex-1 min-w-0">

                                        <p class="text-xs sm:text-sm text-red-700 dark:text-red-300 leading-relaxed">
                                            {{ session('error') }}</p>


                                    </div>
                                    <div class="ml-2 sm:ml-3 flex-shrink-0">
                                        <button @click="show = false"
                                            class="inline-flex text-red-400 hover:text-red-600 transition-colors">
                                            <i data-lucide="x" class="h-3 w-3 sm:h-4 sm:w-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="mb-4 sm:mb-6">
                            <div class="bg-red-50 dark:bg-red-900/20 border-l-4 border-red-400 p-3 sm:p-4 rounded-lg shadow-sm"
                                x-data="{ show: true }" x-show="show">
                                <div class="flex items-start sm:items-center">
                                    <div class="flex-shrink-0">
                                        <i data-lucide="alert-circle"
                                            class="h-4 w-4 sm:h-5 sm:w-5 text-red-400 mt-0.5 sm:mt-0"></i>
                                    </div>
                                    <div class="ml-2 sm:ml-3 flex-1 min-w-0">
                                        @foreach ($errors->all() as $error)
                                            <p class="text-xs sm:text-sm text-red-700 dark:text-red-300 leading-relaxed">
                                                {{ $error }}</p>
                                        @endforeach

                                    </div>
                                    <div class="ml-2 sm:ml-3 flex-shrink-0">
                                        <button @click="show = false"
                                            class="inline-flex text-red-400 hover:text-red-600 transition-colors">
                                            <i data-lucide="x" class="h-3 w-3 sm:h-4 sm:w-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                    @if (session('success'))
                        <div class="bg-green-50 dark:bg-green-900/20 border-l-4 border-green-400 p-3 sm:p-4 rounded-lg shadow-sm"
                            x-data="{ show: true }" x-show="show">
                            <div class="flex items-start sm:items-center">
                                <div class="flex-shrink-0">
                                    <i data-lucide="check-circle"
                                        class="h-4 w-4 sm:h-5 sm:w-5 text-green-400 mt-0.5 sm:mt-0"></i>
                                </div>
                                <div class="ml-2 sm:ml-3 flex-1 min-w-0">
                                    <p class="text-xs sm:text-sm text-green-700 dark:text-green-300 leading-relaxed">
                                        {{ session('success') }}</p>
                                </div>
                                <div class="ml-2 sm:ml-3 flex-shrink-0">
                                    <button @click="show = false"
                                        class="inline-flex text-green-400 hover:text-green-600 transition-colors">
                                        <i data-lucide="x" class="h-3 w-3 sm:h-4 sm:w-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
            <div x-show="showSuccess" x-transition class="mb-6">
            </div>
            <div x-show="showError" x-transition class="mb-6">
                <div>
                </div>
            </div>

            <!-- Support Options Grid -->
            <div class="grid md:grid-cols-1 gap-6 mb-8">
                <!-- Email Support Card -->
                <div
                    class="bg-white dark:bg-gray-900 rounded-2xl p-6 border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex items-center space-x-4 mb-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500/10 to-blue-600/10 flex items-center justify-center">
                            <i data-lucide="mail" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Email Support</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Get help via email</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm">Direct email communication for
                        detailed inquiries and support requests.</p>
                    <a href="mailto:support@apex.adabtrad.com"
                        class="inline-flex items-center space-x-2 text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium transition-colors">
                        <span>support@apex.adabtrad.com</span>
                        <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>





                <!-- Contact Form Section -->
                <div
                    class="bg-white dark:bg-gray-900 rounded-3xl p-8 border border-gray-200 dark:border-gray-700 shadow-sm">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-light text-gray-800 dark:text-white mb-4">Send us a Message
                        </h2>
                        <p class="text-gray-500 dark:text-gray-400 max-w-2xl mx-auto">
                            Have a specific question or need assistance? Fill out the form below and our support
                            team will get back to you as soon as possible.
                        </p>
                    </div>

                    <div class="max-w-2xl mx-auto">
                        <form method="post" action="{{route('auth.support.submit')}}" class="space-y-6"
                            @submit="isSubmitting = true" x-data="{ messageLength: 0 }">
                            @csrf
                            <input type="hidden" name="name" value="{{Auth::user()->name}}" />
                            <input type="hidden" name="email" value="{{Auth::user()->email}}">

                            <!-- User Info Display -->
                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div
                                    class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 border border-gray-200 dark:border-gray-700">
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Your
                                        Name</label>
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center">
                                            <span class="text-white font-semibold text-sm">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                        </div>
                                        <span class="text-gray-800 dark:text-white font-medium">{{Auth::user()->name}}</span>
                                    </div>
                                </div>
                                <div
                                    class="bg-gray-50 dark:bg-gray-800 rounded-xl p-4 border border-gray-200 dark:border-gray-700">
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Your
                                        Email</label>
                                    <div class="flex items-center space-x-3">
                                        <i data-lucide="mail" class="w-5 h-5 text-gray-500"></i>
                                        <span class="text-gray-800 dark:text-white">clarksonlawson1@gmail.com</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Message Field -->
                            <div class="mb-6">
                                <label for="message"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">
                                    Message <span class="text-red-500">*</span>
                                </label>
                                <textarea name="message" id="message" x-model="message" @input="messageLength = $el.value.length"
                                    class="w-full px-4 py-4 bg-gray-50 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-700 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 resize-none"
                                    rows="6" placeholder="Please describe your issue or question in detail..." required maxlength="1000"></textarea>
                                <div class="flex justify-between items-center mt-2">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        Please provide as much detail as possible to help us assist you better.
                                    </p>
                                    <span class="text-sm text-gray-400" x-text="messageLength + '/1000'"></span>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" :disabled="isSubmitting || message.trim().length < 10"
                                    :class="isSubmitting ? 'opacity-50 cursor-not-allowed' : 'hover:scale-105'"
                                    class="inline-flex items-center space-x-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform disabled:opacity-50 disabled:cursor-not-allowed">
                                    <span x-show="!isSubmitting">Send Message</span>
                                    <span x-show="isSubmitting" class="flex items-center space-x-2">
                                        <svg class="animate-spin h-4 w-4" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                                stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
                                        </svg>
                                        <span>Sending...</span>
                                    </span>
                                    <i data-lucide="send" class="w-5 h-5" x-show="!isSubmitting"></i>
                                </button>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-4">
                                    We typically respond within 24 hours during business days.
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Modal -->
                <div x-show="showContactModal" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4"
                    @click.self="showContactModal = false">
                    <div class="bg-white dark:bg-gray-900 rounded-2xl p-6 max-w-md w-full border border-gray-200 dark:border-gray-700"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100">
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i data-lucide="message-circle" class="w-8 h-8 text-green-600 dark:text-green-400"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Live Chat
                                Support</h3>
                            <p class="text-gray-500 dark:text-gray-400 mb-6">
                                Our live chat feature is coming soon! For now, please use the contact form or
                                email us directly.
                            </p>
                            <button @click="showContactModal = false"
                                class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-800 text-gray-800 dark:text-white rounded-xl hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Initialize Lucide icons
            lucide.createIcons();
        </script>

    </div>
@endsection
