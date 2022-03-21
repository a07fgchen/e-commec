<template>
    <div>
        <div>
            <Link href="/">Hello World</Link>
            <Link href="/about">About</Link>
        </div>
        <hr />
        <h1>Hellor World</h1>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'

    export default {
    components: {
        Link,
    },
    metaInfo:{
        title:'Hello World'
    }
}
</script>