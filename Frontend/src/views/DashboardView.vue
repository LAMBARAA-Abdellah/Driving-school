<template>

    <Menu />



    <router-view />





</template>

<script>
import { Icon } from '@iconify/vue';
import Menu from '@/components/DashboardPage/menu.vue';
export default {
    name: "dashboard",
    components: {
        Icon,
        Menu,
        Menu
    },

    inject: ["setRole"],
    props: {
        //! Menu settings
        isMenuOpen: {
            type: Boolean,
            default: true,
        },
        menuIcon: {
            type: String,
            default: "bxl-c-plus-plus",
        },
        isPaddingLeft: {
            type: Boolean,
            default: true,
        },
        menuOpenedPaddingLeftBody: {
            type: String,
            default: "250px",
        },
        menuClosedPaddingLeftBody: {
            type: String,
            default: "78px",
        },

        //! Menu items
        menuItems: {
            type: Array,
            default: () => [
                {
                    link: "/Dashboard",
                    name: "Dashboard",
                    tooltip: "Home",
                    icon: "bx-home",
                },
                {
                    link: "/Dashboard",
                    name: "Demandes",
                    tooltip: "Demandes",
                    icon: "bx-grid-alt",
                },

                // {
                //   link: "/AllORG",
                //   name: "All Organisateur",
                //   tooltip: "Post Sport",
                //   icon: "bx-basketball",
                // },
                // {
                //     link: '/Mes REservations',
                //     name: 'REservations',
                //     tooltip: 'Reservation',
                //     icon: 'bx-cart-alt',
                // },
                {
                    link: "/AllORG",
                    name: "All Organisateur",
                    tooltip: "All Organisateur",
                    icon: "icon-park-outline:steering-wheel",
                },
                {
                    link: '/Archieve',
                    name: 'Archieve',
                    tooltip: 'Archieve',
                    icon: 'bx-block',
                },
                // {
                //   link: "/abonnement",
                //   name: "abonnement",
                //   tooltip: "abonnement",
                //   icon: "bx-heart",
                // },

                {
                    link: "/setting",
                    name: "Setting",
                    tooltip: "Setting",
                    icon: "bx-cog",
                },
            ],
        },

        //! Search
        isSearch: {
            type: Boolean,
            default: true,
        },
        //! Exit button
        isExitButton: {
            type: Boolean,
            default: true,
        },

        //! Styles
        bgColor: {
            type: String,
            default: "#383838",
        },
        secondaryColor: {
            type: String,
            default: "#1d1b31",
        },
        homeSectionColor: {
            type: String,
            default: "#e4e9f7",
        },
        logoTitleColor: {
            type: String,
            default: "#fff",
        },
        iconsColor: {
            type: String,
            default: "#fff",
        },
        itemsTooltipColor: {
            type: String,
            default: "#e4e9f7",
        },
        searchInputTextColor: {
            type: String,
            default: "#fff",
        },
        menuItemsHoverColor: {
            type: String,
            default: "#fff",
        },
        menuItemsTextColor: {
            type: String,
            default: "#fff",
        },
        menuFooterTextColor: {
            type: String,
            default: "#fff",
        },
    },
    data() {
        return {
            menuItems: [
                { name: "Dashboard", link: "/Dashboard", icon: "ant-design:home-outlined", tooltip: "Home" },
                { name: "Students", link: "/students", icon: "ph:student-fill", tooltip: "Students" },
                { name: "Monitors", link: "/monitors", icon: "icon-park-outline:steering-wheel", tooltip: "Monitors" },
                { name: "Cars", link: "/cars", icon: "ant-design:car-filled", tooltip: "Car" },
                { name: "Personnel", link: "/Personnels", icon: "ant-design:team-outlined", tooltip: "personnel" },
                { name: "Archieve", link: "/Archieves", icon: "akar-icons:block", tooltip: "Archieve" },
                { name: "Setting", link: "/settings", icon: "ant-design:setting-outlined", tooltip: "Setting" },



            ],

            role: this.$cookies.get("role"),
            name: this.$cookies.get("name"),
            isOpened: false,
            isclick: true,
            keyword: ''
        };
    },
    mounted() {
        this.isOpened = this.isMenuOpen;
        if (!this.$cookies.get("role")) {
            return this.$router.push('/Login')
        }



    },

    computed: {
        // filtreddata(){
        //     tthis.Monitor.filter(data => data.name.toLowerCase().includes(this.keyword));
        // },
        cssVars() {
            return {
                "--bg-color": this.bgColor,
                "--secondary-color": this.secondaryColor,
                "--home-section-color": this.homeSectionColor,
                "--logo-title-color": this.logoTitleColor,
                "--icons-color": this.iconsColor,
                "--items-tooltip-color": this.itemsTooltipColor,
                "--serach-input-text-color": this.searchInputTextColor,
                "--menu-items-hover-color": this.menuItemsHoverColor,
                "--menu-items-text-color": this.menuItemsTextColor,
                "--menu-footer-text-color": this.menuFooterTextColor,
            };
        },
    },
    // watch: {
    //     isOpened() {
    //         window.document.body.style.paddingLeft =
    //             this.isOpened && this.isPaddingLeft
    //                 ? this.menuOpenedPaddingLeftBody
    //                 : this.menuClosedPaddingLeftBody;
    //     },
    // },
    watch: {
        isOpened() {
            window.document.body.style.paddingLeft =
                this.isOpened && this.isPaddingLeft && window.innerWidth > 1010
                    ? this.menuOpenedPaddingLeftBody
                    : this.menuClosedPaddingLeftBody;
        },
    },
    methods: {
        click() {
            this.isclick = !this.isclick
        },

        deriction(event) {
            this.$router.push(event);
        },
        logout() {
            // localStorage.removeItem("user");
            this.destroyCookies();
            this.$router.push("/Login");
            // this.$router.go();
        },
        //DESTROY COOKIES
        destroyCookies() {
            this.$cookies.remove("role");
            this.$cookies.remove("name");
            this.$cookies.remove("id");
        }
    },
};
</script>
