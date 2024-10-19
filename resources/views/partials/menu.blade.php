<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('cm_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/templates*") ? "c-show" : "" }} {{ request()->is("admin/sites*") ? "c-show" : "" }} {{ request()->is("admin/pages*") ? "c-show" : "" }} {{ request()->is("admin/sections*") ? "c-show" : "" }} {{ request()->is("admin/values*") ? "c-show" : "" }} {{ request()->is("admin/site-infos*") ? "c-show" : "" }} {{ request()->is("admin/dropdowns*") ? "c-show" : "" }} {{ request()->is("admin/config-values*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-puzzle-piece c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.cm.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('template_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.templates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/templates") || request()->is("admin/templates/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-folder c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.template.title') }}
                            </a>
                        </li>
                    @endcan
                   				@can('site_access')
				<li class="c-sidebar-nav-item c-sidebar-nav-dropdown ">
					<a class="c-sidebar-nav-dropdown-toggle" href="{{ route("admin.sites.index") }}"
						class="c-sidebar-nav-link {{ request()->is("admin/sites") || request()->is("admin/sites/*") ? "c-active" :
						"" }}">
						<i class="fa-fw fas fa-sitemap c-sidebar-nav-icon">

						</i>
						{{ trans('cruds.site.title') }}
					</a>

					<ul class="c-sidebar-nav-dropdown-items">
						@foreach ($adminmenu as $site)
						<li>
								<div class="d-flex">
										<a href="{{ route('admin.sites.edit', $site->id) }}">{{ $site->title }}</a>
										<span onclick="$('#menu{{ $site->id }}').slideToggle();">+</span>
								</div>
						</li>
						<ul id="menu{{ $site->id }}" class="" style="display: none;">
								@foreach ($site->sitePages as $page)
										<li>
											<a title="Edit Sections"  href="{{ route('admin.pages.show', $page->id) }}">
												{{ $page->title }}				
											</a>												
										</li>
								@endforeach
						</ul>
				@endforeach
				<li>
					<a href="{{ route('admin.sites.create') }}">
						<i class="fa fa-plus"></i> {{ trans('global.add') }} {{ trans('cruds.site.title_singular') }}
				</a>
				</li>
					</ul>
				</li>
				@endcan
                    @can('page_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.pages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/pages") || request()->is("admin/pages/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-globe c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.page.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('section_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.sections.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sections") || request()->is("admin/sections/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-newspaper c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.section.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('value_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.values.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/values") || request()->is("admin/values/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-highlighter c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.value.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('site_info_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.site-infos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/site-infos") || request()->is("admin/site-infos/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-info-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.siteInfo.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('dropdown_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.dropdowns.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/dropdowns") || request()->is("admin/dropdowns/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-caret-square-down c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.dropdown.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('config_value_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.config-values.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/config-values") || request()->is("admin/config-values/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-list-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.configValue.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('change_log_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.change-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/change-logs") || request()->is("admin/change-logs/*") ? "c-active" : "" }}">
                    <i class="fa-fw far fa-list-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.changeLog.title') }}
                </a>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>