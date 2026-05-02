<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => 'Cris System'
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'title' => 'Cris System'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<!DOCTYPE html>
<html lang="en" data-theme="lemonade">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />


    <title><?php echo e($title); ?></title>
</head>
<body class="">

<div class="max-lg:collapse bg-base-200  shadow-sm w-full rounded-md">
  <input id="navbar-1-toggle" class="peer hidden" type="checkbox" />
  <label for="navbar-1-toggle" class="fixed inset-0 hidden max-lg:peer-checked:block"></label>
  <div class="collapse-title navbar">
    <div class="navbar-start">
      <label for="navbar-1-toggle" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <a href='/' class="btn btn-ghost text-xl">daisyUI</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a href="/">Welcome</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact </a></li>
        <li><a href="/ideas">Ideas </a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <input type="text" placeholder="Search" class="input input-bordered w-64 lg:w-auto" />
    </div>
  </div>

  <div class="collapse-content lg:hidden z-1">
    <ul class="menu">
        <li><a href="/">Welcome</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact </a></li>
        <li><a href="/ideas">Ideas </a></li>
    </ul>
  </div>
</div>

<main class="max-w-screen-2xl mx-auto">
    <div class="mx-10">
          <?php echo e($slot); ?>

    </div>

</main>


</body>
</html>
<?php /**PATH C:\Users\Crissaunt\Documents\GitHub\laravel-project\resources\views/components/layout.blade.php ENDPATH**/ ?>