
<x-page-header title="Derniers articles publiés" />

<div class="grid gap-6 md:grid-cols-2">
    @forelse ($latestPosts as $post)
        <x-post-card :post="$post" />
    @empty
        <x-alert type="warning" title="Aucun article">
            Il n'y a pas encore d'article publié.
        </x-alert>
    @endforelse
</div>
