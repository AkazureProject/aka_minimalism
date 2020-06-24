<div class="left_navi_root ban_select">
        <span id="left_show_navi" class="left_navi_button navi_slide_in" 
            @click="change_navi_visibility" v-show="!is_navi_visible">
            ▤
        </span>
        <div :class="'left_navi_sidebar '+sidebar_animate" v-show="is_navi_visible">
            <span id="left_hide_navi" class="left_navi_button" 
                @click="change_navi_visibility">⇦</span>
            <?php dynamic_sidebar("leftsidebar"); ?>
        </div>
</div>
<script>
    var left_navi=new Vue({
        el:".left_navi_root",
        data:{
            sidebar_animate:'navi_slide_in',
            is_navi_visible:false,
        },
        methods:{
            change_navi_visibility: function(){
                console.log("clicked");
                this.sidebar_animate=!this.is_navi_visible ? 'navi_slide_in':'navi_slide_out';
                if(this.is_navi_visible){
                    var change_animate=setInterval(() => {
                        this.is_navi_visible=!this.is_navi_visible;
                        clearInterval(change_animate);    
                    }, 450);
                }
                else{
                    this.is_navi_visible=!this.is_navi_visible;
                }
            }
        },
    })
</script>