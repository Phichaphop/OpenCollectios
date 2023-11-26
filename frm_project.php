<?php require_once 'Backend/DBSession.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once 'head.php'; ?>

<body>

    <?php require_once 'components/loading/loading.php'; ?>

    <div class="container">

        <?php include "components/layout/side.php" ?>

        <?php require_once 'components/layout/header.php'; ?>

        <section>

            <div class="section-group">

                <?php require_once 'components/layout/alert.php'; ?>

                <!-- Content here -->

                <?php if (isset($_GET['read'])) { ?>
                    
                    <?php if (isset($_GET['project'])) { ?>
                        <?php $data = GetProjectByID($_GET['project'], $conn); ?>

                        <div id="title-top" class="frm-read">
                            <div class="frm-read-content">
                                <p><?= $data['type'] ?> / <?= $release_date ?> <?= DateFormat($data['date']) ?></p>
                                <h1><?= $data['title'] ?></h1>
                            </div>
                        </div>

                        <div class="frm-read">

                            <div class="frm-read-group">

                                <div class="project-cover">

                                    <div class="project-cover-content">
                                        <?php if (!$data['pic']) { ?>
                                            <img class="cover-pic" src="resource/img/logo/opc.png">
                                        <?php } else { ?>
                                            <img class="cover-pic" src="resource/img/ins_logo/<?= $data['pic'] ?>">
                                        <?php } ?>
                                        <p class="cover-text"><?= $data['title'] ?></p>
                                    </div>
                                    <div class="project-cover-content">
                                        <p class="cover-text"><?= $data['ins'] ?></p>
                                    </div>

                                </div>

                            </div>

                            <div class="frm-read-group">


                                <div class="frm-read-content" id="title-detail">
                                    <p><?= $data['type'] ?> / <?= $release_date ?> <?= DateFormat($data['date']) ?></p>
                                    <h1><?= $data['title'] ?></h1>
                                </div>


                                <div class="frm-read-content">
                                    <h4><?= $title ?></h4>
                                    <p><?= $data['title'] ?></p>
                                </div>
                                <div class="frm-read-content">
                                    <h4><?= $author ?></h4>
                                    <p><?= $data['author'] ?></p>
                                </div>
                                <div class="frm-read-content">
                                    <h4><?= $advisor ?></h4>
                                    <p><?= $data['advisor'] ?></p>
                                </div>
                                <div class="frm-read-content">
                                    <h4><?= $project_type ?></h4>
                                    <p><?= $data['type'] ?></p>
                                </div>
                                <div class="frm-read-content">
                                    <h4><?= $major ?></h4>
                                    <p><?= $data['major'] ?></p>
                                </div>
                                <div class="frm-read-content">
                                    <h4><?= $abstract ?></h4>
                                    <p><?= $data['abstract']/*CutAbstract($data['abstract'])*/ ?></p>
                                </div>

                                <?php
                                if (isset($_SESSION['login'])) {
                                    $favorite = CheckFavorite($_GET['project'], $MyID, $conn);
                                    if (!$favorite) {
                                        $favorite_text = $addfavorite;
                                        $favorite_icon = "font-variation-settings:'FILL' 0;";
                                    } else {
                                        $favorite_text = $unfavorite;
                                        $favorite_icon = "font-variation-settings:'FILL' 1;";
                                    }
                                } else {
                                    $favorite_text = $favorite;
                                    $favorite_icon = "font-variation-settings:'FILL' 0;";
                                }
                                ?>

                                <div class="frm-read-content row">
                                    <?php if (isset($_SESSION['login'])) { ?>

                                        <div class="btn-normal-pr" onclick="window.location='Backend/DBFavorite.php?project=<?= $data['id'] ?>&favorite'">
                                            <span class="material-symbols-outlined" style="<?= $favorite_icon ?>">favorite</span>
                                            <?= $favorite_text ?>
                                        </div>

                                    <?php } else { ?>

                                        <div class="btn-normal-pr" onclick="window.location='signin.php'">
                                            <span class="material-symbols-outlined" style="<?= $favorite_icon ?>">favorite</span>
                                            <?= $favorite_text ?>
                                        </div>

                                    <?php } ?>

                                    <div class="btn-normal-se" onclick="window.location='Backend/DBDownload.php?file=<?= $data['file'] ?>'">
                                        <?php include 'components/icon/download.php'; ?>
                                        <?= $download ?>
                                    </div>
                                    <a class="btn-normal-se" href="resource/doc/<?= $data['file'] ?>" target="_blank" ?>
                                        <?php include 'components/icon/View.php'; ?>
                                        <?= $view ?>
                                    </a>

                                </div>

                            </div>

                        </div>


                        <?php if (($data['author'] == isset($_SESSION['login'])) && ($data['status'] == "1" || $data['status'] == "4")) { ?>
                            <div class="frm-read">
                                <div class="frm-read-content">
                                    <h4><?= $status ?></h4>
                                    <p><?= GetNameProjectStatusByID($data['status'], $conn) ?></p>
                                </div>
                                <div class="frm-read-content">
                                    <h4><?= $note ?></h4>
                                    <p><?= $data['note'] ?></p>
                                </div>
                            </div>
                            <div class="frm-read">
                                <div class="btn-pr" onclick="window.location='Backend/DBApprove.php?draft&project=<?= $_GET['project'] ?>'"><?= $sent ?></div>
                                <div class="btn-se" onclick="window.location='frm_project.php?update&detail&project=<?= $_GET['project'] ?>'"><?= $edit_project_detail ?></div>
                                <div class="btn-se" onclick="window.location='frm_project.php?update&file&project=<?= $_GET['project'] ?>'"><?= $edit_project_file ?></div>
                                <div class="btn-se" onclick="window.location='frm_project.php?update&pic&project=<?= $_GET['project'] ?>'"><?= $edit_project_pic ?></div>
                                <div class="btn-del" onclick="window.location='VerifyPass.php?project=<?= $_GET['project'] ?>'"><?= $delete ?></div>
                                <div class="btn-se" onclick="history.back()"><?= $cancel ?></div>
                            </div>
                        <?php } ?>

                        <?php if ((isset($_SESSION['admin']) || isset($_SESSION['publisher']) == $data['approver']) && $data['status'] == "2") { ?>
                            <div class="frm-read">
                                <div class="btn-del" onclick="window.location='frm_project.php?update&cancel&project=<?= $_GET['project'] ?>&cancel'"><?= $not_approve ?></div>
                                <div class="btn-pr" onclick="window.location='Backend/DBApprove.php?project=<?= $_GET['project'] ?>&approve'"><?= $approve ?></div>
                                <div class="btn-se" onclick="history.back()"><?= $cancel ?></div>
                            </div>
                        <?php } ?>

                        <?php if (isset($_SESSION['admin']) && $data['status'] == "3") { ?>
                            <div class="frm-read">
                                <div class="btn-se" onclick="window.location='frm_project.php?update&detail&project=<?= $_GET['project'] ?>'"><?= $update ?></div>
                                <div class="btn-del" onclick="window.location='VerifyPass.php?project=<?= $_GET['project'] ?>'"><?= $delete ?></div>
                                <div class="btn-se" onclick="history.back()"><?= $cancel ?></div>
                            </div>
                        <?php } ?>

                    <?php } ?>

                <?php } ?>

                <?php if (isset($_GET['insert']) || isset($_GET['update']) || isset($_GET['delete'])) { ?>

                    <?php
                    if (isset($_GET['insert']) && isset($_GET['project'])) {
                        $frm_title = $create_project;
                        $action = "Backend/DBProject.php";
                        $btn_id = "Draft";
                        $btn_text = $draft;
                        $submit = "insert_project";
                    }
                    if (isset($_GET['update']) && isset($_GET['pic']) && isset($_GET['project'])) {
                        $data = GetProjectPicByID($_GET['project'], $conn);
                        $_SESSION['project_id'] = $data['id'];

                        $frm_title = $update_project_cover;
                        $action = "Backend/DBProject.php";
                        $btn_id = "Update";
                        $btn_text = $update;
                        $submit = "update_project_cover";

                        echo $data['pic'];
                    }
                    if (isset($_GET['update']) && isset($_GET['detail']) && isset($_GET['project'])) {
                        $data = GetProjectDataByID($_GET['project'], $conn);
                        $_SESSION['project_id'] = $data['id'];

                        $frm_title = $update_project;
                        $action = "Backend/DBProject.php";
                        $btn_id = "Update";
                        $btn_text = $update;
                        $submit = "update_project";
                    }
                    if (isset($_GET['update']) && isset($_GET['file']) && isset($_GET['project'])) {
                        $data = GetProjectByID($_GET['project'], $conn);
                        $_SESSION['project_id'] = $data['id'];

                        $frm_title = $update_project_file;
                        $action = "Backend/DBProject.php";
                        $btn_id = "Update";
                        $btn_text = $update;
                        $submit = "update_project_file";
                    }
                    if (isset($_GET['update']) && isset($_GET['cancel']) && isset($_GET['project'])) {
                        $data = GetProjectByID($_GET['project'], $conn);
                        $_SESSION['project_id'] = $data['id'];

                        $frm_title = $not_approve_detail;
                        $action = "Backend/DBApprove.php";
                        $btn_id = "Update";
                        $btn_text = $update;
                        $submit = "cancel";
                    }
                    if (isset($_GET['insert']) && isset($_GET['project_type'])) {
                        $frm_title = $create_project_type;
                        $action = "Backend/DBProject.php";
                        $btn_id = "Insert";
                        $btn_text = $insert;
                        $submit = "insert_project_type";
                    }
                    if (isset($_GET['update']) && isset($_GET['project_type'])) {
                        $data = GetProjectTypeByID($_GET['project_type'], $conn);
                        $_SESSION['project_type_id'] = $data['id'];

                        $frm_title = $update_project_type;
                        $action = "Backend/DBProject.php";
                        $btn_id = "Update";
                        $btn_text = $update;
                        $submit = "update_project_type";
                    }
                    if (isset($_GET['delete']) && isset($_GET['project_type'])) {
                        $frm_title = $delete_project_type;
                        $action = "Backend/DBProject.php";
                        $btn_id = "Delete";
                        $btn_text = $delete;
                        $submit = "delete_project_type";
                        $_SESSION['project_type_id'] = $_GET['project_type'];
                    }
                    ?>

                    <form class="form" action="<?= $action ?>" method="post" enctype="multipart/form-data" autocomplete="off">

                        <div class="form-head">
                            <h1><?= $frm_title ?></h1>
                        </div>

                        <?php if (isset($_GET['insert']) && isset($_GET['project'])) { ?>


                            <?php include 'components/input/project/title.php'; ?>
                            <?php include 'components/input/project/author.php'; ?>
                            <?php include 'components/input/project/advisor.php'; ?>
                            <?php include 'components/input/select/approver.php'; ?>
                            <?php include 'components/input/project/project_type.php'; ?>
                            <?php include 'components/input/select/major.php'; ?>
                            <?php include 'components/input/project/date.php'; ?>
                            <?php include 'components/input/project/abstract.php'; ?>


                            <script>
                                document.getElementById("Title").addEventListener("keyup", CheckInsertProject)
                                document.getElementById("Author").addEventListener("change", CheckInsertProject)
                                document.getElementById("Advisor").addEventListener("change", CheckInsertProject)
                                document.getElementById("Approver").addEventListener("change", CheckInsertProject)
                                document.getElementById("ProjectType").addEventListener("change", CheckInsertProject)
                                document.getElementById("Major").addEventListener("change", CheckInsertProject)
                                document.getElementById("Abstract").addEventListener("keyup", CheckInsertProject)
                                document.getElementById("Date").addEventListener("change", CheckInsertProject)
                            </script>
                        <?php } ?>

                        <?php if (isset($_GET['update']) && isset($_GET['detail']) && isset($_GET['project'])) { ?>
                            <?php include 'components/input/project/title.php'; ?>
                            <?php include 'components/input/project/author.php'; ?>
                            <?php include 'components/input/project/advisor.php'; ?>
                            <?php include 'components/input/project/project_type.php'; ?>
                            <?php include 'components/input/select/major.php'; ?>
                            <?php include 'components/input/project/abstract.php'; ?>
                            <?php include 'components/input/project/date.php'; ?>
                            <script>
                                document.getElementById("Title").addEventListener("keyup", CheckUpdateProjectDetail)
                                document.getElementById("Author").addEventListener("change", CheckUpdateProjectDetail)
                                document.getElementById("Advisor").addEventListener("change", CheckUpdateProjectDetail)
                                document.getElementById("ProjectType").addEventListener("change", CheckUpdateProjectDetail)
                                document.getElementById("Major").addEventListener("change", CheckUpdateProjectDetail)
                                document.getElementById("Abstract").addEventListener("keyup", CheckUpdateProjectDetail)
                                document.getElementById("Date").addEventListener("change", CheckUpdateProjectDetail)
                            </script>
                        <?php } ?>

                        <?php if (isset($_GET['update']) && isset($_GET['file']) && isset($_GET['project'])) { ?>
                            <?php include 'components/input/project/file.php'; ?>
                            <script>
                                document.getElementById("ProjectFile").addEventListener("change", CheckUpdateProjectFile)
                            </script>
                        <?php } ?>

                        <?php if (isset($_GET['update']) && isset($_GET['pic']) && isset($_GET['project'])) { ?>
                            <?php include 'components/input/file/pic.php'; ?>
                            <script>
                                document.getElementById("Pic").addEventListener("change", CheckUpdateProjectCover)
                            </script>
                        <?php } ?>

                        <?php if (isset($_GET['update']) && isset($_GET['cancel']) && isset($_GET['project'])) { ?>
                            <?php include 'components/input/project/note.php'; ?>
                            <script>
                                document.getElementById("Note").addEventListener("keyup", CheckUpdateProjectNote)
                            </script>
                        <?php } ?>

                        <?php if (isset($_GET['insert']) && isset($_GET['project_type'])) { ?>
                            <?php include 'components/input/text/name.php'; ?>
                            <script>
                                document.getElementById("Name").addEventListener("keyup", CheckInsertProjectType)
                            </script>
                        <?php } ?>

                        <?php if (isset($_GET['update']) && isset($_GET['project_type'])) { ?>
                            <?php include 'components/input/text/name.php'; ?>
                            <script>
                                document.getElementById("Name").addEventListener("keyup", CheckUpdateProjectType)
                            </script>
                        <?php } ?>

                        <?php if (isset($_GET['delete']) && isset($_GET['project_type'])) { ?>
                            <script>
                                window.onload = function() {
                                    document.getElementById("Delete").disabled = false
                                    document.getElementById("Delete").classList = "btn-pr";
                                }
                            </script>
                        <?php } ?>

                        <div class="form-group">
                            <button id="<?= $btn_id ?>" name="<?= $submit ?>" class="btn-se" type="submit" disabled><?= $btn_text ?></button>
                            <div class="btn-te" onclick="history.back()"><?= $cancel ?></div>
                        </div>

                    </form>

                <?php } ?>

                <!-- End Content here -->

            </div>

        </section>

        <?php require_once 'components/layout/nav.php'; ?>

    </div>

</body>

</html>