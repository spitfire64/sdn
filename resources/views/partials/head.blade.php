<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ filled($title ?? null) ? $title : 'Solid Digital Nordic AB' }}</title>

<link rel="icon" href="/images/sdn_96_dpi.png?v=2" type="image/png">
<link rel="apple-touch-icon" href="/apple-touch-icon.png?v=2">

@fonts

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
