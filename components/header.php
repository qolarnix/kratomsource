<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> 

    <title><?php echo $title ?? 'Website title'; ?></title>
    <meta name="description" content="<?php echo $desc ?? 'Website description'; ?>">

    <link rel="stylesheet" href="/../assets/styles/dist.css">
    <script src="/../assets/scripts/htmx.js"></script>
    <script src="/../assets/scripts/countable.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Pathway+Extreme:opsz,wght@8..144,400;8..144,500;8..144,700&family=Plus+Jakarta+Sans:wght@400;500;700&family=Public+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body class="antialiased bg-slate-50 text-slate-800">

    <header class="py-6 px-6 border-b border-slate-100">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center justify-between gap-8">

                <!-- logo -->
                <a href="/" class="inline-block">
                    <span class="text-3xl font-display text-emerald-950 flex items-center gap-3">
                        <ion-icon name="leaf" class="text-emerald-600"></ion-icon>
                        <span>Kratomlist</span>
                    </span>
                </a>

                <div>
                    <ul class="hidden md:flex items-center gap-6 font-medium">
                        <li><a href="/vendors/">Vendors</a></li>
                        <li><a href="/wiki/">Kratom Wiki</a></li>
                        <li><a href="/strains/">Strain & Vein Color</a></li>
                        <li><a href="/blog/">News & Research</a></li>
                        <li><a href="/contact/">Contact</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>