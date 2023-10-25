<nav aria-label="Page navigation example">
    <ul class="pagination pagination-dark">
        <li class="page-item"><a class="page-link" href="{{ $deliverys->previousPageUrl() }}">Previous</a></li>
        @foreach(range(1, $deliverys->lastPage()) as $page)
            <li class="page-item {{ $deliverys->currentPage() === $page ? 'active' : '' }}">
                <a class="page-link" href="{{ $deliverys->url($page) }}">{{ $page }}</a>
            </li>
        @endforeach
        <li class="page-item"><a class="page-link" href="{{ $deliverys->nextPageUrl() }}">Next</a></li>
    </ul>
</nav>  

