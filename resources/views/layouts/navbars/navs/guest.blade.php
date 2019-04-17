<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
  <div class="container">
    <div class="navbar-wrapper">
        <a href="" >
            <h3><small class="text-muted link-color" >
                {{ Config::get('constants.Application.name') }}
            </small></h3>
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <?php $menu = Config::get('constants.menu.guest') ?>

        @for ($i = 0; $i < count($menu) ; $i++)
            <?php $data = explode(",", $menu[$i]) ?>

            <li class="nav-item">
                @if ( $data[1] )
                    <a href="{{ route($data[1]) }}" class="nav-link">
                        @if ( $data[2] )
                            <i class="material-icons">{{ $data[2] }}</i>
                        @endif
                        {{ $data[0] }}
                    </a>
                @else
                    {{ $data[0] }}
                @endif

            </li>
        @endfor


      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
