<style>

    #jobCard  .rec-job-items small{
        font-size: 9px;
    }
    #jobCard  .job-title a{
        background-color: #ECF3FF;
        color: #2979FF;
        border-radius: 15px;
        padding: 2px 4px;
        font-size: 5px;
    }
    #jobCard  .job-title span{
        padding-bottom: 5px;
    }

    #jobCard  .job-title,
    #jobCard  .icons,
    #jobCard  .job_desc,
    #jobCard  .job_desc div,
    #jobCard  .job_desc h6,
    #jobCard  .recruiter span,
    #jobCard  .recruiter h6{
        font-size: 10px;
        line-height: 20px;
    }
    #jobCard  .recruiter span{
        padding-left: 5px;
    }
    #jobCard  .recruiter-item-btn{
        padding: 0 20px 0 67px;
    }
    #jobCard  .recruiter-item-btn button , .main-content-card1 button{
        width: 100px;
        padding: 5px;
        color: #fff;
        background-color: #E33D47;
        border: 0;
        border-radius: 5px;
    }

    #jobCard  .recruiter img{
        width: 25px;
    }

    #jobCard .job-title{
        display: flex;
        justify-content: space-between;
    }

    #jobCard{
        background-color: #ffffff;
        border-radius: 5px;
        border: 1px solid #DDDDDD;
        margin-bottom: 10px;
        padding: 10px;
    }
    #jobCard:hover{
        border: 2px solid #0074FF;
    }




    @media screen and (min-width: 600px) {
        #jobCard  .job-title h6{
            font-size: 16px;
        }

        #jobCard  .job-title a{
            padding: 3px 10px;
            font-size: 10px;
            margin-right: 10px;
        }
        #jobCard .job-title div {
            padding: 2px 0 10px 0;
        }
        #jobCard  .job_desc p{
            padding: 8px 0 0 10px;
        }

        #jobCard .job_desc div,
        #jobCard .job_desc h6,
        #jobCard .recruiter h6{
            font-size: 14px;
            line-height: 24px;
        }

        #jobCard .rec-job-items small,
        #jobCard .rec-job-items span,
        #jobCard .rec-job-items p {
            font-size: 14px;
            line-height: 19px;
        }

        #jobCard .icons{
            padding-bottom: 5px;
        }

        #jobCard  .recruiter{
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }
        #jobCard  .recruiter img{
            width: 40px;
        }
        #jobCard .recruiter-item-btn button {
            font-weight: 600;
            font-size: 14px;
            line-height: 21px;
        }
        #jobCard .recruiter-item-btn  {
            align-self: end;
        }


    }

    @media screen and (min-width: 769px) {
        #jobCard  .rec-job-items h6 {
            font-size: 16px;
            line-height: 24px;
        }

        #jobCard  .job-title a {
            padding: 5px 20px;
            font-size: 14px;
            margin-right: 10px;
        }
        #jobCard  .job-title div {
            padding: 2px 0 3px 0;
        }

        #jobCard  .job_desc p {
            padding: 8px 0 0 10px;
        }

        #jobCard .rec-job-items small,
        #jobCard  .rec-job-items span,
        #jobCard  .rec-job-items p {
            font-size: 14px;
            line-height: 19px;
        }

        #jobCard  .rec-job-desc {
            padding-bottom: 3px ;
        }

        #jobCard  .rec-job-items {
            font-size: 10px;
            line-height: 22px;
            /*margin-bottom: 20px;*/
        }

        #jobCard .icons{
            padding-bottom: 5px;
        }

        #jobCard  .rec-job-icon {
            margin-right: 50px;
        }

        #jobCard  .rec-job-icon svg,
        #jobCard .rec-job-icon img {
            width: 20px;
            height: 20px;
        }

        #jobCard  .rec-job-icon small {
            font-size: 14px;
            line-height: 19px;
        }

        #jobCard  .rec-job-icon span {
            padding-top: 0;
            padding-right: 9px;
        }

        #jobCard  .recruiter{
            display: flex;
            justify-content: space-between;
        }
        #jobCard .recruiter img {
            width: 50px;
        }
        #jobCard .recruiter-item-btn {
            align-self: flex-end;
        }

        #jobCard .recruiter-item-btn button {
            width: 150px;
            padding: 10px;
            font-weight: 600;
            font-size: 16px;
            line-height: 21px;
        }
        #jobCard{
            padding: 20px;
            margin-bottom: 20px;
        }
    }
</style>

<div id="jobCard" class="cards">
    <div class="rec-job-items">
        <div class="job-title">
            <div>
                <h6 style="color: #333"> {!! isset($jobName) ? $jobName : '' !!}</h6>
                <small>Gratitude India {!! isset($company) ? $company : '' !!}</small>
            </div>
            <div>
                <a href="#">
                    <span>
                        <i class="mdi mdi-eye"></i>
                    </span>
                    <span>{!! isset($numView) ? $numView : '' !!}</span>
                    <span>Views</span>
                </a>
                <a href="#">
                    <span>Posted {{ isset($day_posted) ? $day_posted : '' }} days ago</span>
                </a>
            </div>
        </div>

        <div class="d-flex icons">
            <div class="d-flex justify-content-between rec-job-icon">
                <span>
                    <i class="mdi mdi-briefcase-outline"></i>
                </span>
                <small>{!! isset($yearsOfExperience) ? $yearsOfExperience : '' !!}</small>
            </div>
            <div class="d-flex justify-content-between rec-job-icon">
               <span>
                   <i class="mdi mdi-map-marker-outline"></i>
                </span>
                <small> {!! isset($job_location) ? $job_location : '' !!}</small>
            </div>
            <div class="d-flex justify-content-between rec-job-icon">
                <span>
                    <img src="/img/purse_icon.png" alt=""/>
                </span>
                <small>Rs 2 - 6 Lacs p.a</small>
            </div>
        </div>

        <div class="job_desc">
            <h6 class="rec-job-desc"><strong>Job Description:</strong>
                <span> {!! isset($job_desc) ? $job_desc : '' !!}</span>
            </h6>
            <div class="d-flex">
                <h6 class="rec-job-desc"> <strong>Key Skills:</strong>
                    <span>CSS3 . Jquery . HTML5 . Javascript . PHP . Laravel </span>
                </h6>

            </div>
        </div>

        <div class="recruiter">
            <div>
                <h6 class="rec-job-desc">Posted By:</h6>
                <img src="/img/userPic.png"  alt="" class="rounded-circle">
                <span>
                    <strong>Ritu Suruchi  </strong> <span>|</span>
                    <span>{{ isset($followers) ? $followers : '' }} Followers</span>
                </span>
            </div>
            <div class="recruiter-item-btn">
                <a href = "#">
                    <button>Quick Apply</button>
                </a>
            </div>
        </div>
    </div>

</div>
