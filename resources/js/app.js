require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { Head, Link } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import Layout from '@/Pages/Shared/Layout';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: async (name) => {
        const page = (await import(`./Pages/${name}.vue`)).default;
        page.layout = Layout || page.layout;
        return page;
    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .component('Head', Head)
            .component('Link', Link)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({
    color: '#4B5563',
    delay: 1250
});
