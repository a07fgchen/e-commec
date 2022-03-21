<template>
    <div>
        <div>
            <Link href="/">Hello World</Link>
            <Link href="/about">About</Link>
        </div>
        <hr />
        <h1>About</h1>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'

    export default {
    components: {
        Link,
    },
    metaInfo:{
        title:'About'
    }
}
</script>