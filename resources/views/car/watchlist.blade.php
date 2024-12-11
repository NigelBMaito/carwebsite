<x-app-layout>
    <main>
        <!-- My Favourite Cars Section -->
        <section>
            <div class="container">
                <div class="flex justify-between items-center">
                    <h2>My Favourite Cars</h2>
                    @if ($cars->total() > 0)
                    <div class="pagination-summary">
                        <p>
                            Showing {{ $cars->firstItem() }} to {{ $cars->lastItem() }} of {{ $cars->total() }} results.
                        </p>
                    </div>
                    @else
                    <p>No cars found in your watchlist.</p>
                    @endif
                </div>

                <div class="car-items-listing">
                    @foreach ($cars as $car)
                    <x-car-item :$car :isInWatchlist="true" />
                    @endforeach
                </div>

                <!-- Pagination Links -->
                {{ $cars->onEachSide(1)->links() }}

            </div>
        </section>
        <!--/ My Favourite Cars Section -->
    </main>
</x-app-layout>
