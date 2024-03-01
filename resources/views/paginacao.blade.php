<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item {{ $posts->currentPage() == 1 ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $posts->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">Anterior</span>
            </a>
        </li>
        @for ($i = 1; $i <= $posts->lastPage(); $i++)
            <li class="page-item {{ $posts->currentPage() == $i ? 'active' : '' }}">
                <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item {{ $posts->currentPage() == $posts->lastPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $posts->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true">Próxima</span>
            </a>
        </li>
    </ul>
</nav>