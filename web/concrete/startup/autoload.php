<?php

$classes = array(
	'Log' => array('library','log'),
	'Request' => array('library','request'),
	'Localization' => array('library','localization'),
	'View' => array('library','view'),
	'Events' => array('library','events'),
	'Model' => array('library','model'),
	'ItemList' => array('library','item_list'),
	'DatabaseItemList' => array('library','database_item_list'),
	'Controller' => array('library','controller'),
	'FileType,FileTypeList' => array('library','file/types'),
	'BlockView' => array('library','block_view'),
	'MailImporter' => array('library','mail/importer'),
	'Archive' => array('library','archive'),
	'ContentImporter' => array('library','content/importer'),
	'ContentExporter' => array('library','content/exporter'),
	'BlockViewTemplate' => array('library','block_view_template'),
	'BlockController' => array('library','block_controller'),
	'AttributeTypeView' => array('library','attribute/view'),
	'AttributeTypeController' => array('library','attribute/controller'),
	'Area' => array('model','area'),
	'GlobalArea' => array('model','global_area'),
	'AttributeKey' => array('model','attribute/key'),
	'AttributeValue,AttributeValueList' => array('model','attribute/value'),
	'AttributeKeyCategory' => array('model','attribute/category'),
	'AttributeSet' => array('model','attribute/set'),
	'AttributeType' => array('model','attribute/type'),
	'Block' => array('model','block'),
	'Job' => array('model','job'),
	'CustomStyleRule,CustomStylePreset' => array('model','custom_style'),
	'File' => array('model','file'),
	'FileSet,FileSetFile,FileSetList' => array('model','file_set'),
	'Pile' => array('model','pile'),
	'FileVersion' => array('model','file_version'),
	'PageList' => array('model', 'page_list'),
	'UserList' => array('model', 'user_list'),
	'FileList' => array('model', 'file_list'),
	'UserPrivateMessage,UserPrivateMessageMailbox' => array('model', 'user_private_message'),
	'PageStatistics' => array('model', 'page_statistics'),
	'UserStatistics' => array('model', 'user_statistics'),
	'UsersFriends' => array('model', 'users_friends'),
	'BlockType,BlockTypeList' => array('model','block_types'),
	'Collection' => array('model','collection'),
	'CollectionVersion' => array('model','collection_version'),
	'CollectionType' => array('model','collection_types'),
	'Group' => array('model','groups'),
	'Layout' => array('model','layout'),
	'Package,PackageList' => array('model','package'),
	'CollectionAttributeKey,CollectionAttributeValue' => array('model','attribute/categories/collection'),
	'FileAttributeKey,FileAttributeValue' => array('model','attribute/categories/file'),
	'UserAttributeKey,UserAttributeValue' => array('model','attribute/categories/user'),
	'Page' => array('model','page'),
	'SinglePage' => array('model','single_page'),
	'PageTheme,PageThemeEditableStyle' => array('model','page_theme'),
	'ComposerPage' => array('model','composer_page'),
	'PermissionAccess' => array('model','permission/access/model'),
	'PermissionAccessEntity' => array('model','permission/access/entity/model'),
	'PermissionAccessEntityType' => array('model','permission/access/entity/type'),
	'UserPermissionAccessEntity' => array('model','permission/access/entity/types/user'),
	'GroupPermissionAccessEntity' => array('model','permission/access/entity/types/group'),
	'GroupCombinationPermissionAccessEntity' => array('model','permission/access/entity/types/group_combination'),
	'PageOwnerPermissionAccessEntity' => array('model','permission/access/entity/types/page_owner'),
	'FileUploaderPermissionAccessEntity' => array('model','permission/access/entity/types/file_uploader'),
	'PermissionAccessListItem' => array('model','permission/access/list_item'),
	'PermissionDuration' => array('model','permission/duration'),
	'PermissionKeyCategory' => array('model','permission/category'),
	'PermissionKey' => array('model','permission/key'),
	'PermissionAssignment' => array('model','permission/assignment'),
	'Permissions' => array('model','permissions'),
	'PermissionResponse' => array('model','permission/response'),
	'PermissionCache' => array('model','permission/cache'),
	'PermissionSet' => array('model','permission/set'),
	'PagePermissionKey' => array('model','permission/keys/page'),
	'PagePermissionAssignment' => array('model','permission/assignments/page'),
	'BasicPagePermissionAssignment' => array('model','permission/assignments/basic_page'),
	'PagePermissionAccess' => array('model','permission/access/categories/page'),
	'PagePermissionAccessListItem' => array('model','permission/access/list_items/page'),
	'TaskPermission' => array('model','permission/categories/task'),
	'BlockTypePermissionKey,BlockTypePermissionAssignment,BlockTypePermissionAccess,BlockTypePermissionAccessListItem' => array('model','permission/categories/block_type'),
	'FileSetPermissionKey,FileSetPermissionAssignment,FileSetPermissionAccess,FileSetPermissionAccessListItem' => array('model','permission/categories/file_set'),
	'FilePermissions' => array('model','permission/categories/file_set'),
	'FilePermissionKey,FilePermissionAssignment,FilePermissionAccess,FilePermissionAccessListItem' => array('model','permission/categories/file'),
	'StackPermissionAssignment,StackPermissionKey,StackPermissionAccess,StackPermissionAccessListItem' => array('model','permission/categories/stack'),
	'AreaPermissionAssignment,AreaPermissionKey,AreaPermissionAccess,AreaPermissionAccessListItem' => array('model','permission/categories/area'),
	'BlockPermissionAssignment,BlockPermissionAccess,BlockPermissionKey,BlockPermissionAccessListItem' => array('model','permission/categories/block'),
	'UserPermissionKey,UserPermissionAccess,UserPermissionAccessListItem' => array('model','permission/categories/user'),
	'SitemapPermissionKey,SitemapPermissionAccess,SitemapPermissionAccessListItem' => array('model','permission/categories/sitemap'),
	'AdminPermissionKey,AdminPermissionAccess,AdminPermissionAccessListItem' => array('model','permission/categories/admin'),
	'MarketplaceNewsflowPermissionKey,MarketplaceNewsflowPermissionAccess,MarketplaceNewsflowPermissionAccessListItem' => array('model','permission/categories/marketplace_newsflow'),
	'WorkflowPermissionAssignment,WorkflowPermissionKey,WorkflowPermissionAccess,WorkflowPermissionAccessListItem' => array('model','permission/categories/workflow'),
	'BasicWorkflowPermissionAssignment,BasicWorkflowPermissionKey,BasicWorkflowPermissionAccess,BasicWorkflowPermissionAccessListItem' => array('model','permission/categories/basic_workflow'),
	'AccessUserSearchUserPermissionKey,AccessUserSearchUserPermissionAssignment,AccessUserSearchUserPermissionAccess,AccessUserSearchUserPermissionAccessListItem' => array('model','permission/keys/custom/access_user_search'),
	'AddBlockBlockTypePermissionKey,AddBlockBlockTypePermissionAssignment,AddBlockBlockTypePermissionAccess,AddBlockBlockTypePermissionAccessListItem' => array('model','permission/keys/custom/add_block'),
	'AddBlockToAreaAreaPermissionKey,AddBlockToAreaAreaPermissionAssignment,AddBlockToAreaAreaPermissionAccess,AddBlockToAreaAreaPermissionAccessListItem' => array('model','permission/keys/custom/add_block_to_area'),
	'AddFileFileSetPermissionKey,AddFileFileSetPermissionAssignment,AddFileFileSetPermissionAccess,AddFileFileSetPermissionAccessListItem' => array('model','permission/keys/custom/add_file'),
	'AddSubpagePagePermissionKey,AddSubpagePagePermissionAssignment,AddSubpagePagePermissionAccess,AddSubpagePagePermissionAccessListItem' => array('model','permission/keys/custom/add_subpage'),
	'AssignUserGroupsUserPermissionKey,AssignUserGroupsUserPermissionAssignment,AssignUserGroupsUserPermissionAccess,AssignUserGroupsUserPermissionAccessListItem' => array('model','permission/keys/custom/assign_user_groups'),
	'EditPagePropertiesPagePermissionKey,EditPagePropertiesPagePermissionAssignment,EditPagePropertiesPagePermissionAccess,EditPagePropertiesPagePermissionAccessListItem' => array('model','permission/keys/custom/edit_page_properties'),
	'EditPageThemePagePermissionKey,EditPageThemePagePermissionAssignment,EditPageThemePagePermissionAccess,EditPageThemePagePermissionAccessListItem' => array('model','permission/keys/custom/edit_page_theme'),
	'EditUserPropertiesUserPermissionKey,EditUserPropertiesUserPermissionAssignment,EditUserPropertiesUserPermissionAccess,EditUserPropertiesUserPermissionAccessListItem' => array('model','permission/keys/custom/edit_user_properties'),
	'ViewUserAttributesUserPermissionKey,ViewUserAttributesUserPermissionAssignment,ViewUserAttributesUserPermissionAccess,ViewUserAttributesUserPermissionAccessListItem' => array('model','permission/keys/custom/view_user_attributes'),
	'AreaPermissionResponse' => array('model','permission/response/area'),
	'BlockPermissionResponse' => array('model','permission/response/block'),
	'CollectionVersionPermissionResponse' => array('model','permission/response/collection_version'),
	'ComposerPagePermissionResponse' => array('model','permission/response/composer_page'),
	'FileSetPermissionResponse' => array('model','permission/response/file_set'),
	'FilePermissionResponse' => array('model','permission/response/file'),
	'PagePermissionResponse' => array('model','permission/response/page'),
	'StackPermissionResponse' => array('model','permission/response/stack'),
	'Workflow,EmptyWorkflow' => array('model','workflow/model'),
	'WorkflowDescription' => array('model','workflow/description'),
	'WorkflowProgress' => array('model','workflow/progress/model'),
	'WorkflowProgressCategory' => array('model','workflow/progress/category'),
	'WorkflowProgressHistory,WorkflowHistoryEntry' => array('model','workflow/progress/history'),
	'WorkflowProgressResponse' => array('model','workflow/progress/response'),
	'WorkflowProgressAction,WorkflowProgressCancelAction,WorkflowProgressApprovalAction' => array('model','workflow/progress/action'),
	'PageWorkflowProgress' => array('model','workflow/progress/categories/page'),
	'WorkflowRequest' => array('model','workflow/request/model'),
	'PageWorkflowRequest' => array('model','workflow/request/categories/page'),
	'ApprovePagePageWorkflowRequest' => array('model','workflow/request/requests/approve_page'),
	'ChangePagePermissionsPageWorkflowRequest' => array('model','workflow/request/requests/change_page_permissions'),
	'ChangePagePermissionsInheritancePageWorkflowRequest' => array('model','workflow/request/requests/change_page_permissions_inheritance'),
	'ChangeSubpageDefaultsInheritancePageWorkflowRequest' => array('model','workflow/request/requests/change_subpage_defaults_inheritance'),
	'DeletePagePageWorkflowRequest' => array('model','workflow/request/requests/delete_page'),
	'MovePagePageWorkflowRequest' => array('model','workflow/request/requests/move_page'),
	'WorkflowType' => array('model','workflow/type'),
	'User' => array('model','user'),
	'UserInfo' => array('model','userinfo'),
	'Stack' => array('model','stack/model'),
	'DashboardBaseController' => array('controller', '/dashboard/base')
);

Loader::registerAutoload($classes);
spl_autoload_register(array('Loader', 'autoload'), true);
