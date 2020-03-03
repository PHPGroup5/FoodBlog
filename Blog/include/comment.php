<div class="row">
    <div class="col-md-12 col-lg-12 mx-auto">
        <div class="comment">
            <div id="layout" data-tracking-area="layout">
                <div id="thread__container">
                    <div id="thread__wrapper">
                        <div id="tos__container"></div>
                        <section id="conversation" data-role="main" data-tracking-area="main">
                            <div id="posts">
                                <div id="form" class="textarea-outer-wrapper--top-level">
                                    <form action="insertComment.php" method="post" id="PostCmt">
                                        <div class="form-group">
                                                <textarea id="summernote" class="form-control"
                                                          name="content"></textarea>
                                            <br>
                                            <input type="submit" class="btn btn-primary btn-md"
                                                   value="post comment">
                                        </div>
                                    </form>
                                </div>
                                <?php
                                include("config.php");
                                $result = mysqli_query($conn, " select c.content, r.firstName, r.lastName from post p,comment c,reg r,user_comment_post d where c.commentID = d.commentID AND d.userID=r.id AND p.id=d.postID and p.id='" . $_SESSION['postID'] . "';");

                                while ($row = mysqli_fetch_assoc($result)):
                                    ?>
                                    <ul id="post-list" class="post-list">
                                        <li class="post">
                                            <div data-role="post-content" class="post-content authored-by-session-user"
                                                 tabindex="0">
                                                <div class="avatar hovercard"><a
                                                            href="https://disqus.com/by/disqus_omOzwnvYmI/"
                                                            data-action="profile" data-username="disqus_omOzwnvYmI"
                                                            target="_blank" rel="noopener noreferrer" class="user"><img
                                                                data-role="user-avatar" data-user="345245329"
                                                                src="//a.disquscdn.com/1581704280/images/noavatar92.png"
                                                                alt="Avatar"></a></div>
                                                <div class="post-body">
                                                    <header class="comment__header"><span
                                                                class="post-byline"><span> <span
                                                                        class="author publisher-anchor-color"><a
                                                                            href="https://disqus.com/by/disqus_omOzwnvYmI/"
                                                                            data-action="profile"
                                                                            data-username="disqus_omOzwnvYmI"
                                                                            target="_blank"
                                                                            rel="noopener noreferrer"><?php echo $row ['firstName'] . " " . $row['lastName'] ?></a></span> <span
                                                                        class="badge moderator">Member</span></span></span>
                                                    </header>
                                                    <div class="post-body-inner">
                                                        <div class="post-message-container"
                                                             data-role="message-container">
                                                            <div class="publisher-anchor-color"
                                                                 data-role="message-content">
                                                                <div class="post-message " data-role="message"
                                                                     dir="auto">
                                                                    <div>
                                                                        <p><?php echo $row['content'] ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                <?php endwhile; ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>