
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll);


Vue.component('message', require('./components/message.vue'));

const app = new Vue({
    el: '#app',

    data: {
    	message: '',
    	chat:{
    		messages:[],
            user:[],
            color:[]
    	}
    },

    methods: {
    	send(){
    		if(this.message.length != 0)
    		{
    			this.chat.messages.push(this.message);
                this.chat.color.push('warning');
                this.chat.user.push('you');

                axios.post('send', {
                    message: this.message
                })
                .then(response => {
                    console.log(response);
                    this.message = '';
                })
                .catch(error => {
                    console.log(error);
                });

    		}


    	}
    },

    mounted() {
        Echo.private('chat')
        .listen('ChatEvent', (e) => {
            this.chat.messages.push(e.message);
            this.chat.color.push('success');
            this.chat.user.push(e.user);
        });
    }
});
