<div class="py-20 bg-white" x-data="{
    active: 0,
    testimonials: {{ Js::from($testimonials) }},
    next() {
        this.active = (this.active + 1) % this.testimonials.length
    },
    prev() {
        this.active = (this.active - 1 + this.testimonials.length) % this.testimonials.length
    }
}" x-init="setInterval(() => next(), 6000)">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Apa Kata Pelanggan Kami?</h2>
            <p class="text-xl text-gray-600">
                Lebih dari 5000+ keluarga mempercayai keamanan rumah mereka kepada kami
            </p>
        </div>

        <div class="max-w-4xl mx-auto relative overflow-hidden">
            <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-8 md:p-12 relative h-96">
                <template x-for="(item, index) in testimonials" :key="index">
                    <div
                        x-show="active === index"
                        x-transition:enter="transition-all transform ease-out duration-700"
                        x-transition:enter-start="translate-x-full opacity-0"
                        x-transition:enter-end="translate-x-0 opacity-100"
                        x-transition:leave="transition-all transform ease-in duration-500 absolute inset-0"
                        x-transition:leave-start="translate-x-0 opacity-100"
                        x-transition:leave-end="-translate-x-full opacity-0"
                        class="absolute inset-0 text-center flex flex-col justify-center items-center px-4"
                    >
                        <!-- Bintang -->
                        <div class="flex justify-center mb-4">
                            <template x-for="i in 5">
                                <svg class="h-6 w-6 text-yellow-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                </svg>
                            </template>
                        </div>

                        <blockquote class="text-xl md:text-2xl text-gray-700 mb-8 leading-relaxed" x-text="item.content"></blockquote>

                        <div class="flex items-center justify-center space-x-4">
                            <img :src="item.image || 'https://via.placeholder.com/150'" :alt="item.name" class="w-16 h-16 rounded-full object-cover shadow-md" />
                            <div class="text-left">
                                <div class="font-semibold text-gray-900" x-text="item.name"></div>
                                <div class="text-gray-600" x-text="item.role"></div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Navigasi panah -->
            <div class="absolute top-1/2 left-0 transform -translate-y-1/2">
                <button @click="prev" class="bg-white shadow p-2 rounded-full hover:bg-gray-100">
                    <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"/></svg>
                </button>
            </div>
            <div class="absolute top-1/2 right-0 transform -translate-y-1/2">
                <button @click="next" class="bg-white shadow p-2 rounded-full hover:bg-gray-100">
                    <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        <!-- Dot navigasi -->
        <div class="flex justify-center mt-8 space-x-2">
            <template x-for="(item, index) in testimonials">
                <button
                    @click="active = index"
                    class="w-3 h-3 rounded-full transition-all duration-300"
                    :class="active === index ? 'bg-blue-600 scale-125' : 'bg-gray-300 hover:bg-gray-400'">
                </button>
            </template>
        </div>
    </div>
</div>
    