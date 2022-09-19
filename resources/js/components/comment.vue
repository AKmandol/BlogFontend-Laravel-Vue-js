<template>
    <div>
        <div class="post_dtls_cmnt_sec">
            <h2 class="post_dtls_title2 pad_b20">Comments</h2>
            <!-- comment -->
            <div class="cmnt_box_all">
                <div class="cmnt_box_top dis_flx">
                    <div class="cmnt_box_top_left d-flex">
                        <div class="cmnt_img mar_r15">
                            <img src="/img/man.png" alt="image">
                        </div>
                        <div class="cmnnt_name">
                            <div class="cmnt_name_left">
                                <h4 class="tchr_nam mar_b10">james smith</h4>
                            </div>
                            <div class="cmnt_name_right">
                                <p class="cmnt_name_right_p">05 Nov 2022 AT 12:00 AM</p>
                            </div>
                        </div>
                    </div>
                                        
                </div>

                <div class="cmnnt_p pad_t10">
                    <p>
                        I recently completed another course from the 365 team "Data Science Boot Camp" where I was able to review my college course work taken many years ago in statistics along with an overview of programming languages (Python) I use regularly. 
                    </p>
                    <p class="post_reply mar_t5 mb-2" @click="replyClick = !replyClick" >Reply</p>
                </div>

                <div v-if="replyClick">
                    <div class="mb-2">
                        <textarea class="form-control" placeholder="Not Functional" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button  @click="replyClick = false" type="button" class="btn btn-info btn-sm mr-3">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Reply</button>
                    </div>
                </div>

            </div>
            <!-- comment -->

            <!-- reply -->
            <div class="cmnt_box_all reply_sec">
                <div class="cmnt_box_top dis_flx">
                    <div class="cmnt_box_top_left d-flex">
                        <div class="cmnt_img mar_r15">
                            <img src="/img/woman.png" alt="image">
                        </div>
                        <div class="cmnnt_name">
                            <div class="cmnt_name_left dis_fx_cntr">
                                <h4 class="tchr_nam mar_b10">Liam Dawson</h4>	
                            </div>
                            <div class="cmnt_name_right">
                                <p class="cmnt_name_right_p">06 Nov 2022 AT 11:23 PM</p>
                            </div>
                        </div>
                    </div>
                                        
                </div>

                <div class="cmnnt_p pad_t10">
                    <p>
                        Great course. Excellent introduction. Pretty fast paced. And while I was new to the field I had to do some exploration next to the explanations provided within the course.
                    </p>
                    <p class="post_reply mar_t5" @click="replyClick2 = !replyClick2" >Reply</p>
                </div>

                <div v-if="replyClick2">
                    <div class="mb-2">
                        <textarea class="form-control" placeholder="Not Functional" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button  @click="replyClick2 = false" type="button" class="btn btn-info btn-sm mr-3">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Reply</button>
                    </div>
                </div>

            </div>
        
            <!-- reply -->

           
        </div>

        <!--WRITE COMMENT BOX -->
            <div class="cmnt_frm mar_t30">
                <h2 class="post_dtls_title2 pad_b20">Leave A Comment</h2>
            <div class="cmnt_frm_all">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="cmnt_input">
                            <p>NAME</p>
                            <input type="text" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="cmnt_input">
                            <p>E-MAIL</p>
                            <input type="text" placeholder="Enter your E-MAIL">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="cmnt_input">
                            <p class="mar_b10">MESSAGE</p>
                            <textarea placeholder="Type your comment" name="message"></textarea>
                        </div>
                    </div>
                    <div class="dtls_frm_btn mar_t20">
                        <button class="btn1">Add Comment</button>
                    </div>
                </div>
            </div>
        </div>
        <!--WRITE COMMENT BOX -->
    </div>
</template>

<script>
export default {
    data(){
        return {
            replyClick: false,
            replyClick2: false,
        }
    },

    methods: {

    }
}
</script>