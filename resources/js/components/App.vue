<template>
    <main class="flex flex-col h-screen border-t-4 border-primary">
        <Header></Header>

        <div class="flex flex-row flex-grow container mx-auto px-3 mt-3">
            <router-view></router-view>
        </div>

        <FooterLinks></FooterLinks>
        <Footer></Footer>
    </main>
</template>

<script>
    import Header from './Header';
    import Footer from './Footer';
    import FooterLinks from './FooterLinks';

    export default {
        mounted() {
            // console.log('Component mounted.')
        },

        components: {
            Header,
            Footer,
            FooterLinks
        }
    }
</script>
