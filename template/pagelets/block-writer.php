
    <div id="block-writer">
        <div class="content">
            <form action="process/new-block.php" method="post">
                <header>
                    <input name="block_name" id="block_name" type="text" placeholder="Untitled">
                    <button class="btn writer_toggle"><i class="ph ph-x"></i></button>
                </header>

                <div class="block_content_container">
                <div class="block_copy_container">
                    <textarea name="block_copy" id="block_copy" hidden></textarea>
                    <div class="block_editor"></div>
                </div>
                
                <div class="tags">
                    <input id="block_tags" name="block_tags" type="text" hidden>
                    <div class="tag_container"></div>
                    <div class="tag_input-container">
                        <label for="tag_input">Tags: </label>
                            <input id="tag_input" name="tag_input" type="text">
                        <div class="tag_auto">
                        </div>
                    </div>
                </div>
                <input class="btn" type="submit" value="Save!">
                </div>
            </form>
        </div>
    </div>