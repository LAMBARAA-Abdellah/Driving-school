<template>
    <div class="bodyContent">


        <div class='message  flex items-center justify-center ' v-for="message in Messages">
            <div class=" message-card rounded-xl border p-5 shadow-md w-9/12  bg-gray-300"
                :class="{ 'bg-white': message.etat == 1, 'bg-gray-100': message.etat == 0 }">
                <div class="flex w-full items-center justify-between border-b pb-3">
                    <div class="flex items-center space-x-3">
                        <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                        <div class="text-lg font-bold text-slate-700">{{ message.name }}</div>
                    </div>
                    <div class="flex items-center space-x-8">

                        <div class="text-xs text-neutral-500">{{ message.dateCreation }}</div>
                    </div>
                </div>

                <div class="mt-4 mb-6">
                    <div class="mb-3 text-xl font-bold">{{ message.email }}</div>
                    <div class="mb-3 text-xl font-bold">{{ message.phone }}</div>
                    <div class="text-sm text-neutral-600">{{ message.message }}</div>
                </div>

                <div>
                    <button @click="deleteMessage(message.id)" class="rounded-2xl border bg-red-100  px-3 py-1 text-xs font-semibold"
                        style="background:red !important">supprimer</button>
                    &nbsp;&nbsp;

                    <button v-if="message.etat == 0" @click="archive(message.id)"
                        class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">verifier</button>
                    <button v-else @click="cancel(message.id)"
                        class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">cancel</button>
                </div>
            </div>
        </div>
    </div>


</template>

<script>

import router from '@/router';
export default {
    name: 'Login',
    data() {
        return {
            Messages: [],
            sup: false

        }
    },
    methods: {
        getMessages() {
            fetch("http://localhost/Statique/Backend/chat/getMessages").then(res => res.json()).then(Message => {
                this.Messages = Message;
            })
        },
         deleteMessage(id) {
            fetch(`http://localhost/Statique/Backend/chat/deleteMessage?id=${id}`,
                {
                    method: "GET"
                }
            ).then(() => {
                this.getMessages();
            })
        },

        archive(id) {
            fetch(`http://localhost/Statique/Backend/chat/archiveMessage?id=${id}`,
                {
                    method: "GET"
                }
            ).then(() => {
                this.getMessages();
            })
        },
        cancel(id) {
            fetch(`http://localhost/Statique/Backend/chat/cancel?id=${id}`,
                {
                    method: "GET"
                }
            ).then(() => {
                this.getMessages();
            })
        },


    },
    mounted() {
        this.getMessages();
    },



}
</script>
<style scoped lang="scss">
@tailwind base;
@tailwind components;
@tailwind utilities;

.card-login {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.message {
    margin-bottom: 20px;
}

button {
    background-color: #F8CE03 !important;
}
@media screen and (max-width: 768px) {
    .message-card {
        width: 100%;
    }

    
}
</style>