<!-- ------------------------------------------------------------------------
NONONO!
THIS IS JUST A MOCK-UP!!
----------------------------------------------------------------------------- -->
<div class="wrap">
	<h2>
		List Table Title (mock-up)
		<a class="add-new-h2" href="">Add New</a>
	</h2>
	<ul class="subsubsub">
		<li class="all">
			<a class="current" href="">
				All
				<span class="count">(9999)</span>
			</a>
			|
		</li>
		<li class="publish">
			<a class="publish">
				Published
				<span class="count">(9999)</span>
			</a>
		</li>
	</ul>
	<form id="post-filter" method="get">

		<!-- search box -->
		<p class="search-box">
			<label class="screen-reader-text" for="post-search-input">Search Posts:</label>
			<input id="post-search-input" type="search" value="" name="s" />
			<input id="search-submit" class="button" type="submit" value="Search Posts" />
		</p>

		<!-- hidden values -->
		<input class="post_status_page" type="hidden" value="all" name="post_status" />
		<input class="post_type_page" type="hidden" value="post" name="post_type" />
		<input type="hidden" value="/wp-admin/edit.php" name="_wp_http_referer" />

		<!-- bulk actions, filters, view switching -->
		<div class="tablenav top">

			<!-- bulk actions -->
			<div class="alignleft actions bulkactions">
				<label class="screen-reader-text" for="bulk-action-selector-top">Select bulk action</label>
				<select id="bulk-action-selector-top" name="action">
					<option selected="selected" value="-1">Bulk Actions</option>
					<option class="hide-if-no-js" value="edit">Edit</option>
					<option value="trash">Move to Trash</option>
				</select>
				<input id="doaction" class="button action" type="submit" value="Apply" />
			</div>

			<!-- date, category -->
			<div class="alignleft actions">
				<label class="screen-reader-text" for="filter-by-date">Filter by date</label>
				<select id="filter-by-date" name="m">
					<option value="0" selected="selected">All Dates</option>
					<option value="201505">May 2015</option>
				</select>

				<label class="screen-reader-text" for="cat">Filter by category</label>
				<select id="cat" class="postform" name="cat">
					<option value="0">All categories</option>
					<option class="level-0" value="1">Uncategorized</option>
				</select>

				<input id="post-query-submit" class="button" type="submit" value="Filter" name="filter_action" />
			</div>

			<!-- item count and pagenation -->
			<div class="tablenav-pages one-page">
				<span class="displaying-num">1 item</span>
				<span class="pagination-links">
					<a class="first-page disabled" href="" title="Go to the first page">
						«
					</a>
					<a class="prev-page disabled" href="" title="Go to the previous page">
						‹
					</a>
					<span class="paging-input">
		                <label class="screen-reader-text" for="current-page-selector">
			                Select Page
		                </label>
		                <input id="current-page-selector" class="current-page" type="text" size="1" value="1" name="paged" title="Current page" />
				         of
		                <span class="total-pages">1</span>
		            </span>
					<a class="next-page disabled" href="" title="Go to the next page">
						›
					</a>
					<a class="last-page disabled" href="http://wordpress/wp-admin/edit.php?paged=1" title="Go to the last page">
						»
					</a>
				</span>
			</div>

			<input type="hidden" value="list" name="mode" />

			<!-- view switching -->
			<div class="view-switch">
				<a id="view-switch-list" class="view-list current" href="">
					<span class="screen-reader-text">List View</span>
				</a>
				<a id="view-switch-excerpt" class="view-excerpt" href="">
					<span class="screen-reader-text">Excerpt View</span>
				</a>
			</div>

			<br class="clear" />
		</div>

		<!-- main table -->
		<table class="wp-list-table widefat fixed stripped posts">
			<!-- header -->
			<thead>
				<tr>
					<!-- checkbox: select all -->
					<th id="cb" class="manage-column column-cb check-column" style="" scope="col">
						<label class="screen-reader-text" for="cb-select-all-1">Select All</label>
						<input id="cb-select-all-1" type="checkbox" />
					</th>

					<!-- title -->
					<th id="title" class="manage-column column-title sortable desc" style="" scope="col">
						<a href="">
							<span>Title</span>
							<span class="sorting-indicator"></span>
						</a>
					</th>

					<!-- Author -->
					<th id="author" class="manage-column column-author" style="" scope="col">
						Author
					</th>

					<!-- Categories -->
					<th id="categories" class="manage-column column-categories" style="" scope="col">
						Categories
					</th>

					<!-- Tags -->
					<th id="tags" class="manage-column column-tags" style="" scope="col">
						Tags
					</th>

					<!-- Comments -->
					<th id="comments" class="manage-column column-comments num sortable desc" style="" scope="col">
						<a href="http://wordpress/wp-admin/edit.php?orderby=comment_count&order=asc">
				            <span>
				                <span class="vers comment-grey-bubble" title="Comments"></span>
				            </span>
							<span class="sorting-indicator"></span>
						</a>
					</th>

					<!-- Date -->
					<th id="date" class="manage-column column-date sortable asc" style="" scope="col">
						<a href="http://wordpress/wp-admin/edit.php?orderby=date&order=desc">
							<span>Date</span>
							<span class="sorting-indicator"></span>
						</a>
					</th>
				</tr>
			</thead>
			<tbody id="the-list">
				<tr id="post-1" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-uncategorized">
					<th class="check-column" scope="row">
						<label class="screen-reader-text" for="cb-select-1">
							Select Hello world!
						</label>
						<input id="cb-select-1" type="checkbox" value="1" name="post[]" />
						<div class="locked-indicator"></div>
					</th>
					<td class="post-title page-title column-title">
						<strong>
							<a class="row-title" title="Edit “Hello world!”" href="">
								Hello world!
							</a>
						</strong>
						<div class="locked-info">
							<span class="locked-avatar"></span>
							<span class="locked-text"></span>
						</div>
						<!-- row actions -->
						<div class="row-actions">
							<span class="edit">
								<a title="Edit this item" href="">Edit</a>
								|
							</span>
							<span class="inline hide-if-no-js">
								<a class="editinline" title="Edit this item inline" href="#">
									Quick Edit
								</a>
								|
							</span>
							<span class="trash">
								<a class="submitdelete" href="">
									Trash
								</a>
								|
							</span>
							<span class="view">
								<a rel="permalink" title="View “Hello world!”" href="">
									View
								</a>
							</span>
						</div>
						<div id="inline_1" class="hidden">

						</div>
					</td>
					<td class="author column-author">
						<a href="">
							changwoo
						</a>
					</td>
					<td class="categories column-categories">
						<a href="">
							Uncategorized
						</a>
					</td>
					<td class="tags column-tags">
						--
					</td>
					<td class="comments column-comments">
						<div class="post-com-count-wrapper">
							<a class="post-com-count" title="0 pending" href=""">
							<span class="comment-count">
								1
							</span>
							</a>
						</div>
					</td>
					<td class="date column-date">
						<abbr title="2015/04/23 11:32:35 am">
							2015/04/23
						</abbr>
						<br/>
						Published
					</td>
				</tr>
				<tr class="hidden">

				</tr>
			</tbody>

			<!-- footer -->
			<tfoot>
				<tr>
					<!-- checkbox: select all -->
					<th id="cb" class="manage-column column-cb check-column" style="" scope="col">
						<label class="screen-reader-text" for="cb-select-all-2">Select All</label>
						<input id="cb-select-all-2" type="checkbox" />
					</th>

					<!-- title -->
					<th id="title" class="manage-column column-title sortable desc" style="" scope="col">
						<a href="">
							<span>Title</span>
							<span class="sorting-indicator"></span>
						</a>
					</th>

					<!-- Author -->
					<th id="author" class="manage-column column-author" style="" scope="col">
						Author
					</th>

					<!-- Categories -->
					<th id="categories" class="manage-column column-categories" style="" scope="col">
						Categories
					</th>

					<!-- Tags -->
					<th id="tags" class="manage-column column-tags" style="" scope="col">
						Tags
					</th>

					<!-- Comments -->
					<th id="comments" class="manage-column column-comments num sortable desc" style="" scope="col">
						<a href="http://wordpress/wp-admin/edit.php?orderby=comment_count&order=asc">
					            <span>
					                <span class="vers comment-grey-bubble" title="Comments"></span>
					            </span>
							<span class="sorting-indicator"></span>
						</a>
					</th>

					<!-- Date -->
					<th id="date" class="manage-column column-date sortable asc" style="" scope="col">
						<a href="http://wordpress/wp-admin/edit.php?orderby=date&order=desc">
							<span>Date</span>
							<span class="sorting-indicator"></span>
						</a>
					</th>
				</tr>
			</tfoot>

		</table>
	</form>
</div>
