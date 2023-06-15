<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="pagination-area py-5">
        @if ($paginator->onFirstPage())
            <li class="page-item">
                <a href="page-link" class="next page-numbers">
                    <i class='bx bx-chevron-left'>Previous</i>
                </a>
            </li>
        @else
            <li class="page-item">
                <a href="{{ $paginator->previousPageUrl() }}" class="next page-numbers">
                    <i class='bx bx-chevron-left'>Previous</i>
                </a>
            </li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a href="{{ $paginator->nextPageUrl() }}" class="next page-numbers">
                    <i class='bx bx-chevron-right'></i>
                </a>
            </li>
        @else
            <li class="page-item disabled">
                <a href="page-link" class="next page-numbers">
                    <i class='bx bx-chevron-right'>Previous</i>
                </a>
            </li>
        @endif
        </ul>
        </nav>
</body>

</html>
