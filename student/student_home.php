<?php 
include '../menu/postlogin_header_menu.php';
	
	
	session_start();
	
	if(isset($_SESSION["prereg_score"] )){
		
		 $username = "root"; 
	 $password = ""; 
    $host = "localhost"; 
    $dbname = "moocys"; 
$prereg_score =	$_SESSION["prereg_score"];
	$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	$sql = "SELECT Count(user) as count FROM member_scores where user = '".$_SESSION['username']."'";
				$result = mysqli_query($conn, $sql);
				
			if ((mysqli_fetch_array($result)['count']> 0)) {
				}
				else{
						$sql = "INSERT INTO member_scores (user, reading, writing, speaking, listening, vocab) VALUES ('".$_SESSION['username']."', '".$prereg_score."', '".$prereg_score."', '".$prereg_score."', '".$prereg_score."', '0')";
						$result = mysqli_query($conn, $sql);
					}
		
		
		}
?>


 <div class="container body-content">
<div class="student-home-welcome">
    <div class="student-home-panel">
        <welcome><chinese>欢迎光临    <?php echo $_SESSION['username']  ?> </chinese></welcome><br>Basic Member expire on 23/01/2017
        <hr>

        <?php 
		
			 $username = "root"; 
	 $password = ""; 
    $host = "localhost"; 
    $dbname = "moocys"; 
		$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
		$sql = "SELECT Count(user) as count FROM member_scores where user = '".$_SESSION['username']."'";
				$result = mysqli_query($conn, $sql);
				
			if ((mysqli_fetch_array($result)['count']> 0)) {
			$sql = "SELECT * FROM member_scores where user = '".$_SESSION['username']."'";
				$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);
		
			
			?>   <h4><bold>Estimated Scores</bold></h4><br>
            <div class="estimate_score_container">
                <div class="estimate_bar">
				<div class="reading_bar" style="width: <?php echo $row['reading']/0.09 ?>%;" >
                        READING
                    </div>
				</div>
                <div class="estimation_result">
                    <?php echo $row['reading'] ?>/9
                </div>
            </div>

            <div class="estimate_score_container">
                <div class="estimate_bar">
                    <div class="writing_bar" style="width: <?php echo $row['writing']/0.09 ?>%;">
                        WRITING
                    </div>
                </div>
                <div class="estimation_result">
                   <?php echo $row['writing']?>/9
                </div>

            </div>
            <div class="estimate_score_container">
                <div class="estimate_bar">
                    <div class="listening_bar" style="width: <?php echo $row['listening']/0.09 ?>%;">
                        LISTENING
                    </div>
                </div>
                <div class="estimation_result">
                    <?php echo $row['listening'] ?>/9
                </div>

            </div>
            <div class="estimate_score_container">
                <div class="estimate_bar">
                    <div class="speaking_bar" style="width: <?php echo $row['speaking']/0.09 ?>%;">
                        SPEAKING
                    </div>
                </div>
                <div class="estimation_result">
                    <?php echo $row['speaking'] ?>/9
                </div>

            </div>
			
			<?php
				}
				else{
				?>
						<div class="blurred">
            <h4><bold>Estimated Scores</bold></h4><br>
            <div class="estimate_score_container">
                <div class="estimate_bar">
                    <div class="reading_bar">
                        READING
                    </div>
                </div>
                <div class="estimation_result">
                   
                </div>
            </div>

            <div class="estimate_score_container">
                <div class="estimate_bar">
                    <div class="writing_bar">
                        WRITING
                    </div>
                </div>
                <div class="estimation_result">
                    
                </div>

            </div>
            <div class="estimate_score_container">
                <div class="estimate_bar">
                    <div class="listening_bar">
                        LISTENING
                    </div>
                </div>
                <div class="estimation_result">
                    
                </div>

            </div>
            <div class="estimate_score_container">
                <div class="estimate_bar">
                    <div class="speaking_bar">
                        SPEAKING
                    </div>
                </div>
                <div class="estimation_result">
                    
                </div>

            </div>
                </div><br>
                    <div class="overlay">
                        Take the Initiation Questions to get your IELTS assessment
                       <a href='../home/prereg.php'> Pre Assessment Click Here</a>
                    </div>
					<?php
					}
		
		
		
		
		 
         
     ?>
            
                   
              
                </div>
    <div class="student-home-panel">
        <center><div class="student-home-panel-title"><bluebold>Estimated Score Chart</bluebold></div></center>
        <center> <div class="chart-container"></div></center>
    </div>
    <div class="student-home-panel" style="text-align:center;font-size:20px;">
        徽章<br>
        <div class="student_home_course_block_subtitle">Badges</div>
        <badge><img src="../images/moocys/listening.png" class="unearned_badge" /></badge>
        <badge><img src="../images/moocys/speaking.png" class="unearned_badge" /></badge>
        <badge><img src="../images/moocys/reading.png" class="unearned_badge" /></badge>
        <badge><img src="../images/moocys/writing.png" class="unearned_badge" /></badge>
        <badge><img src="../images/moocys/vocab.png" class="unearned_badge" /></badge>
        <badge><img src="../images/moocys/grammar.png" class="unearned_badge" /></badge>
    </div>
</div>

<div class="row">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 training ">

        <div class="student_home_course_block " onclick="window.location.href = '/Student/Study/materials_reading'">
            Reading<br>
            <div class="student_home_course_block_subtitle">阅读<br><div class="student_home_course_block_subtitle2">(Page 1)</div></div>
            <center><div id="reading_progress" value="10"></div></center><br>

        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 training ">
        <div class="student_home_course_block " onclick="window.location.href = '/Student/Study/materials_speaking'">
            Speaking<br>
            <div class="student_home_course_block_subtitle">口语<br><div class="student_home_course_block_subtitle2">(Page 1)</div></div>
            <center><div id="speaking_progress" value="10"></div></center><br>

        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 training ">
        <div class="student_home_course_block " onclick="window.location.href = '/Student/Study/materials_writing'">
            Writing<br>
            <div class="student_home_course_block_subtitle">写作<br><div class="student_home_course_block_subtitle2">(Page 2)</div></div>
            <center><div id="writing_progress" value="10"></div></center><br>

        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 training ">
        <div class="student_home_course_block " onclick="window.location.href = '/Student/Study/materials_listening'">
            Listening<br>
            <div class="student_home_course_block_subtitle">听力<br><div class="student_home_course_block_subtitle2">(Page 1)</div></div>
            <center><div id="listening_progress" value="10"></div></center><br>

        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 training ">
        <div class="student_home_course_block " onclick="window.location.href = '/Student/Study/VocabularyExplanation'">
            Vocab<br>
            <div class="student_home_course_block_subtitle">词语<br><div class="student_home_course_block_subtitle2">(Done 1 %)</div></div>
            <center><div id="vocabulary_progress" value="10"></div></center><br>

        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 training ">
        <div class="student_home_course_block ">
            Overall<br>
            <div class="student_home_course_block_subtitle">语法<br><div class="student_home_course_block_subtitle2">(Page 1)</div></div>
            <center><div id="overall_progress" value=""></div></center><br>

        </div>
    </div>
</div>
<!--
<div class="row">
 
    <div class="col-lg-6 col-md-6 col-sm-6 home-page-title">
        <div class="inner-training">
            <h2>模拟测试题</h2>
            <p>
                @if (Model.ExamDetails.Count == 0)
                {
                @:(all exams are taken)
            }
                @foreach (var exam in Model.ExamDetails)
                {
                <div class="sample-exam @exam.PartitionKey.ToLower()-sample-exam">@Html.ActionLink(exam.ExamName, "Take", "Exam", new { id = exam.Id }, null)</div>
                }
            </p>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 home-page-title">
        <div class="inner-training">
            <h2>测试题结果</h2>
            @if (Model.TakenExams.Count == 0)
            {
            @:(no exams have been taken)
            }
            @foreach (var exam in Model.TakenExams)
            {
            <span>

                @if (String.Equals(@exam.MarkingProgress, "UserComplete"))
                    {
                <div class="unmarked-exam">
                    <div class="student-home-exam-not-marked">
                        @exam.ExamType 测试
                        <p class="date-created">@exam.UserCompleted.ToShortDateString()交的卷</p>
                    </div> <br>
                    <center><div class="not-marked"><number>@exam.DaysSinceTaken</number> 天未批改 </div></center>
                    <p class="student-home-date-created"></p>

                </div>
                    }
                    else if (String.Equals(@exam.MarkingProgress, "MarkingInProgress"))
                    {
                <div class="marking-exam">
                    <div class="student-home-exam-not-marked">@exam.ExamType 测试 <p class="date-created">@exam.UserCompleted.ToShortDateString()交的卷</p></div> <br>
                    <center><div class="marking"> 正在批改中</div></center>
                    <p class="student-home-date-created"></p>

                </div>
                    }
                    else
                    {

                <div class="marked-exam">
                    <div class="student-home-exam-not-marked">@exam.ExamType 测试 <p class="date-created">@exam.UserCompleted.ToShortDateString()交的卷</p></div> <br>
                    <center><div class="marked"><a href="@exam.MarkedFile">点击这里来看结果</a></div></center>
                    <p class="student-home-date-created"></p>



                </div>
                    }
            </span>
            }
        </div>
    </div>
</div>
-->
<center>
    <img src="../icons/small-icon-blue.png" height="75px" width="75px" style="margin-top:50px;margin-bottom:50px;">
</center>

</div>

 <script>
        var data = [
[
{axis: "Vocabulary", value: 6},
{axis: "Reading", value: 2},
{axis: "Writing", value: 8},
{axis: "Listening", value: 5},
{axis: "Speaking", value: 1}
]
        ];
        RadarChart.draw(".chart-container", data);
     
        
    var cssApplier;
    window.onload = function() {
        rangy.init();
        cssApplier = rangy.createCssClassApplier("highlighter", true); // true turns on normalization
    };
    $(function() {
        $(".passage").mouseup(function () {
        cssApplier.toggleSelection();
      });
    });
    $('.highlighter-red').click(function () {
        cssApplier = rangy.createCssClassApplier("highlighter-red", true); // true turns on normalization
        document.getElementById("passage-content-id").className = 'passage-content-red';
    });

    $('.highlighter-orange').click(function () {
        cssApplier = rangy.createCssClassApplier("highlighter-orange", true); // true turns on normalization
        document.getElementById("passage-content-id").className = 'passage-content-orange';
    });

    $('.highlighter-yellow').click(function () {
        cssApplier = rangy.createCssClassApplier("highlighter-yellow", true); // true turns on normalization
        document.getElementById("passage-content-id").className = 'passage-content-yellow';
    });

    $('.highlighter-green').click(function () {
        cssApplier = rangy.createCssClassApplier("highlighter-green", true); // true turns on normalization
        document.getElementById("passage-content-id").className = 'passage-content-green';
    });

    $('.highlighter-blue').click(function () {
        cssApplier = rangy.createCssClassApplier("highlighter-blue", true); // true turns on normalization
        document.getElementById("passage-content-id").className = 'passage-content-blue';
    });

    $('.eraser-icon').click(function () {
        $('*[class^="highlighter"]').removeClass();
        document.getSelection().removeAllRanges();
    });

    var graph = new Rickshaw.Graph({
        element: document.querySelector(".line-graph-student"),
        width: 300,
        height: 200,
        series: [{
            color: 'steelblue',
            data: [
                { x: 0, y: 40 },
                { x: 1, y: 49 },
                { x: 2, y: 38 },
                { x: 3, y: 30 },
                { x: 4, y: 32 }]
        }]
    });

    graph.render();
    </script>
<?php 
include '../menu/prelogin_footer_menu.php';
	
?>