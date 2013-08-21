$data = array(
  'bundles' => array(
    'avc_corner' => FALSE,
    'book' => (object) array(
      'type' => 'book',
      'name' => 'Book page',
      'base' => 'node_content',
      'module' => 'node',
      'description' => '<em>Books</em> have a built-in hierarchical navigation. Use for handbooks or tutorials.',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'book',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
    'faq' => (object) array(
      'type' => 'faq',
      'name' => 'FAQ',
      'base' => 'faq',
      'module' => 'faq',
      'description' => 'A frequently asked question and its answer.',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Question',
      'custom' => '0',
      'modified' => '1',
      'locked' => '1',
      'disabled' => FALSE,
      'orig_type' => 'faq',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
    'glossary_item' => (object) array(
      'type' => 'glossary_item',
      'name' => 'Glossary Item',
      'base' => 'node_content',
      'module' => 'node',
      'description' => '',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'glossary_item',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
    'news_item' => (object) array(
      'type' => 'news_item',
      'name' => 'News Item',
      'base' => 'node_content',
      'module' => 'node',
      'description' => 'Used to create news items that aren\'t in the main or secondary menus',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'news_item',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
    'panopoly_page' => (object) array(
      'type' => 'panopoly_page',
      'name' => 'Basic Page',
      'base' => 'node_content',
      'module' => 'panopoly_pages',
      'description' => 'An important page to display to users on your site.',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '0',
      'modified' => '1',
      'locked' => '1',
      'disabled' => FALSE,
      'orig_type' => 'panopoly_page',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
    'photo' => (object) array(
      'type' => 'photo',
      'name' => 'Photo',
      'base' => 'node_content',
      'module' => 'node',
      'description' => 'Single photo for gallery',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'photo',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
    'related_link' => (object) array(
      'type' => 'related_link',
      'name' => 'Related Link',
      'base' => 'node_content',
      'module' => 'node',
      'description' => '',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'related_link',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
    'related_link_attachment' => (object) array(
      'type' => 'related_link_attachment',
      'name' => 'Related Link Attachment',
      'base' => 'node_content',
      'module' => 'node',
      'description' => 'Add an attachment as a Related Link',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'related_link_attachement',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
    'slide_item' => (object) array(
      'type' => 'slide_item',
      'name' => 'Slide Item',
      'base' => 'node_content',
      'module' => 'node',
      'description' => 'Items to be displayed in slideshow.',
      'help' => '',
      'has_title' => '1',
      'title_label' => 'Title',
      'custom' => '1',
      'modified' => '1',
      'locked' => '0',
      'disabled' => '0',
      'orig_type' => 'slide_item',
      'disabled_changed' => FALSE,
      'bc_entity_type' => 'node',
    ),
  ),
  'fields' => array(
    'body' => array(
      'entity_types' => array(
        0 => 'node',
      ),
      'foreign keys' => array(
        'format' => array(
          'table' => 'filter_format',
          'columns' => array(
            'format' => 'format',
          ),
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'settings' => array(),
      'translatable' => '0',
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_body' => array(
                'value' => 'body_value',
                'summary' => 'body_summary',
                'format' => 'body_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_body' => array(
                'value' => 'body_value',
                'summary' => 'body_summary',
                'format' => 'body_format',
              ),
            ),
          ),
        ),
      ),
      'field_name' => 'body',
      'type' => 'text_with_summary',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'text',
          'size' => 'big',
          'not null' => FALSE,
        ),
        'summary' => array(
          'type' => 'text',
          'size' => 'big',
          'not null' => FALSE,
        ),
        'format' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'panopoly_page',
          1 => 'faq',
          2 => 'news_item',
          3 => 'photo',
          4 => 'book',
          5 => 'glossary_item',
          6 => 'slide_item',
          7 => 'related_link',
          8 => 'related_link_attachment',
          9 => 'ucb_hrweb_avc_corner',
        ),
      ),
    ),
    'field_external_link' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'attributes' => array(
          'target' => 'default',
          'class' => '',
          'rel' => '',
        ),
        'url' => 0,
        'title' => 'optional',
        'title_value' => '',
        'title_maxlength' => 128,
        'enable_tokens' => 1,
        'display' => array(
          'url_cutoff' => 80,
        ),
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_external_link' => array(
                'url' => 'field_external_link_url',
                'title' => 'field_external_link_title',
                'attributes' => 'field_external_link_attributes',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_external_link' => array(
                'url' => 'field_external_link_url',
                'title' => 'field_external_link_title',
                'attributes' => 'field_external_link_attributes',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(),
      'indexes' => array(),
      'field_name' => 'field_external_link',
      'type' => 'link_field',
      'module' => 'link',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'url' => array(
          'type' => 'varchar',
          'length' => 2048,
          'not null' => FALSE,
          'sortable' => TRUE,
        ),
        'title' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
          'sortable' => TRUE,
        ),
        'attributes' => array(
          'type' => 'text',
          'size' => 'medium',
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'news_item',
        ),
      ),
    ),
    'field_faq_category' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'allowed_values' => array(
          0 => array(
            'vocabulary' => 'faqs',
            'parent' => '0',
          ),
        ),
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_faq_category' => array(
                'tid' => 'field_faq_category_tid',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_faq_category' => array(
                'tid' => 'field_faq_category_tid',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'tid' => array(
          'table' => 'taxonomy_term_data',
          'columns' => array(
            'tid' => 'tid',
          ),
        ),
      ),
      'indexes' => array(
        'tid' => array(
          0 => 'tid',
        ),
      ),
      'field_name' => 'field_faq_category',
      'type' => 'taxonomy_term_reference',
      'module' => 'taxonomy',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'tid' => array(
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'faq',
        ),
      ),
    ),
    'field_featured_image' => array(
      'entity_types' => array(),
      'foreign keys' => array(
        'fid' => array(
          'table' => 'file_managed',
          'columns' => array(
            'fid' => 'fid',
          ),
        ),
      ),
      'indexes' => array(
        'fid' => array(
          0 => 'fid',
        ),
      ),
      'settings' => array(
        'uri_scheme' => 'public',
        'default_image' => 0,
      ),
      'translatable' => '0',
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_featured_image' => array(
                'fid' => 'field_featured_image_fid',
                'alt' => 'field_featured_image_alt',
                'title' => 'field_featured_image_title',
                'width' => 'field_featured_image_width',
                'height' => 'field_featured_image_height',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_featured_image' => array(
                'fid' => 'field_featured_image_fid',
                'alt' => 'field_featured_image_alt',
                'title' => 'field_featured_image_title',
                'width' => 'field_featured_image_width',
                'height' => 'field_featured_image_height',
              ),
            ),
          ),
        ),
      ),
      'field_name' => 'field_featured_image',
      'type' => 'image',
      'module' => 'image',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'fid' => array(
          'description' => 'The {file_managed}.fid being referenced in this field.',
          'type' => 'int',
          'not null' => FALSE,
          'unsigned' => TRUE,
        ),
        'alt' => array(
          'description' => 'Alternative image text, for the image\'s \'alt\' attribute.',
          'type' => 'varchar',
          'length' => 512,
          'not null' => FALSE,
        ),
        'title' => array(
          'description' => 'Image title text, for the image\'s \'title\' attribute.',
          'type' => 'varchar',
          'length' => 1024,
          'not null' => FALSE,
        ),
        'width' => array(
          'description' => 'The width of the image in pixels.',
          'type' => 'int',
          'unsigned' => TRUE,
        ),
        'height' => array(
          'description' => 'The height of the image in pixels.',
          'type' => 'int',
          'unsigned' => TRUE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'photo',
        ),
      ),
    ),
    'field_gallery' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'allowed_values' => array(
          0 => array(
            'vocabulary' => 'galleries',
            'parent' => '0',
          ),
        ),
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_gallery' => array(
                'tid' => 'field_gallery_tid',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_gallery' => array(
                'tid' => 'field_gallery_tid',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'tid' => array(
          'table' => 'taxonomy_term_data',
          'columns' => array(
            'tid' => 'tid',
          ),
        ),
      ),
      'indexes' => array(
        'tid' => array(
          0 => 'tid',
        ),
      ),
      'field_name' => 'field_gallery',
      'type' => 'taxonomy_term_reference',
      'module' => 'taxonomy',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '3',
      'deleted' => '0',
      'columns' => array(
        'tid' => array(
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'photo',
        ),
      ),
    ),
    'field_home_page' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'allowed_values' => array(
          0 => array(
            'vocabulary' => 'home_page_content',
            'parent' => '0',
          ),
        ),
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_home_page' => array(
                'tid' => 'field_home_page_tid',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_home_page' => array(
                'tid' => 'field_home_page_tid',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'tid' => array(
          'table' => 'taxonomy_term_data',
          'columns' => array(
            'tid' => 'tid',
          ),
        ),
      ),
      'indexes' => array(
        'tid' => array(
          0 => 'tid',
        ),
      ),
      'field_name' => 'field_home_page',
      'type' => 'taxonomy_term_reference',
      'module' => 'taxonomy',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '2',
      'deleted' => '0',
      'columns' => array(
        'tid' => array(
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'panopoly_page',
        ),
      ),
    ),
    'field_link_category' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'allowed_values' => array(
          0 => array(
            'vocabulary' => 'related_links_categories',
            'parent' => '0',
          ),
        ),
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_link_category' => array(
                'tid' => 'field_link_category_tid',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_link_category' => array(
                'tid' => 'field_link_category_tid',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'tid' => array(
          'table' => 'taxonomy_term_data',
          'columns' => array(
            'tid' => 'tid',
          ),
        ),
      ),
      'indexes' => array(
        'tid' => array(
          0 => 'tid',
        ),
      ),
      'field_name' => 'field_link_category',
      'type' => 'taxonomy_term_reference',
      'module' => 'taxonomy',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'tid' => array(
          'type' => 'int',
          'unsigned' => TRUE,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'related_link',
          1 => 'related_link_attachment',
        ),
      ),
    ),
    'field_publication_date' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'granularity' => array(
          'month' => 'month',
          'day' => 'day',
          'year' => 'year',
          'hour' => 0,
          'minute' => 0,
          'second' => 0,
        ),
        'tz_handling' => 'none',
        'timezone_db' => '',
        'cache_enabled' => 1,
        'cache_count' => '1',
        'todate' => '',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_publication_date' => array(
                'value' => 'field_publication_date_value',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_publication_date' => array(
                'value' => 'field_publication_date_value',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(),
      'indexes' => array(),
      'field_name' => 'field_publication_date',
      'type' => 'datetime',
      'module' => 'date',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'datetime',
          'mysql_type' => 'datetime',
          'pgsql_type' => 'timestamp without time zone',
          'sqlite_type' => 'varchar',
          'sqlsrv_type' => 'smalldatetime',
          'not null' => FALSE,
          'sortable' => TRUE,
          'views' => TRUE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'news_item',
        ),
      ),
    ),
    'field_slide_image' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'display_field' => 1,
        'display_default' => 1,
        'uri_scheme' => 'public',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_slide_image' => array(
                'fid' => 'field_slide_image_fid',
                'display' => 'field_slide_image_display',
                'description' => 'field_slide_image_description',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_slide_image' => array(
                'fid' => 'field_slide_image_fid',
                'display' => 'field_slide_image_display',
                'description' => 'field_slide_image_description',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'fid' => array(
          'table' => 'file_managed',
          'columns' => array(
            'fid' => 'fid',
          ),
        ),
      ),
      'indexes' => array(
        'fid' => array(
          0 => 'fid',
        ),
      ),
      'field_name' => 'field_slide_image',
      'type' => 'file',
      'module' => 'file',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'fid' => array(
          'description' => 'The {file_managed}.fid being referenced in this field.',
          'type' => 'int',
          'not null' => FALSE,
          'unsigned' => TRUE,
        ),
        'display' => array(
          'description' => 'Flag to control whether this file should be displayed when viewing content.',
          'type' => 'int',
          'size' => 'tiny',
          'unsigned' => TRUE,
          'not null' => TRUE,
          'default' => 1,
        ),
        'description' => array(
          'description' => 'A description of the file.',
          'type' => 'text',
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'slide_item',
        ),
      ),
    ),
    'field_slide_pager_item_text' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'max_length' => '255',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_slide_pager_item_text' => array(
                'value' => 'field_slide_pager_item_text_value',
                'format' => 'field_slide_pager_item_text_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_slide_pager_item_text' => array(
                'value' => 'field_slide_pager_item_text_value',
                'format' => 'field_slide_pager_item_text_format',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'format' => array(
          'table' => 'filter_format',
          'columns' => array(
            'format' => 'format',
          ),
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'field_name' => 'field_slide_pager_item_text',
      'type' => 'text',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'varchar',
          'length' => '255',
          'not null' => FALSE,
        ),
        'format' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'slide_item',
        ),
      ),
    ),
    'field_slide_text' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_slide_text' => array(
                'value' => 'field_slide_text_value',
                'format' => 'field_slide_text_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_slide_text' => array(
                'value' => 'field_slide_text_value',
                'format' => 'field_slide_text_format',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'format' => array(
          'table' => 'filter_format',
          'columns' => array(
            'format' => 'format',
          ),
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'field_name' => 'field_slide_text',
      'type' => 'text_long',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'text',
          'size' => 'big',
          'not null' => FALSE,
        ),
        'format' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'slide_item',
        ),
      ),
    ),
    'field_slide_url' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'max_length' => '255',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_slide_url' => array(
                'value' => 'field_slide_url_value',
                'format' => 'field_slide_url_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_slide_url' => array(
                'value' => 'field_slide_url_value',
                'format' => 'field_slide_url_format',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'format' => array(
          'table' => 'filter_format',
          'columns' => array(
            'format' => 'format',
          ),
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'field_name' => 'field_slide_url',
      'type' => 'text',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'varchar',
          'length' => '255',
          'not null' => FALSE,
        ),
        'format' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'slide_item',
        ),
      ),
    ),
    'field_source' => array(
      'translatable' => '0',
      'entity_types' => array(),
      'settings' => array(
        'max_length' => '255',
      ),
      'storage' => array(
        'type' => 'field_sql_storage',
        'settings' => array(),
        'module' => 'field_sql_storage',
        'active' => '1',
        'details' => array(
          'sql' => array(
            'FIELD_LOAD_CURRENT' => array(
              'field_data_field_source' => array(
                'value' => 'field_source_value',
                'format' => 'field_source_format',
              ),
            ),
            'FIELD_LOAD_REVISION' => array(
              'field_revision_field_source' => array(
                'value' => 'field_source_value',
                'format' => 'field_source_format',
              ),
            ),
          ),
        ),
      ),
      'foreign keys' => array(
        'format' => array(
          'table' => 'filter_format',
          'columns' => array(
            'format' => 'format',
          ),
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'field_name' => 'field_source',
      'type' => 'text',
      'module' => 'text',
      'active' => '1',
      'locked' => '0',
      'cardinality' => '1',
      'deleted' => '0',
      'columns' => array(
        'value' => array(
          'type' => 'varchar',
          'length' => '255',
          'not null' => FALSE,
        ),
        'format' => array(
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ),
      ),
      'bundles' => array(
        'node' => array(
          0 => 'news_item',
        ),
      ),
    ),
  ),
  'instances' => array(
    'body' => array(
      0 => array(
        'label' => 'Body',
        'widget' => array(
          'type' => 'text_textarea_with_summary',
          'settings' => array(
            'rows' => 20,
            'summary_rows' => 5,
          ),
          'weight' => 31,
          'module' => 'text',
        ),
        'settings' => array(
          'display_summary' => TRUE,
          'text_processing' => 1,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'settings' => array(),
            'module' => 'text',
            'weight' => 0,
          ),
          'teaser' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => FALSE,
        'description' => '',
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'book',
        'deleted' => '0',
        'default_value' => NULL,
      ),
      1 => array(
        'label' => 'Answer',
        'widget' => array(
          'weight' => '4',
          'type' => 'text_textarea_with_summary',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'rows' => '20',
            'summary_rows' => 5,
          ),
        ),
        'settings' => array(
          'text_processing' => '1',
          'display_summary' => 1,
          'better_formats' => array(
            'allowed_formats_toggle' => 0,
            'allowed_formats' => array(
              'editor' => 'editor',
              'panopoly_wysiwyg_text' => 'panopoly_wysiwyg_text',
              'panopoly_html_text' => 'panopoly_html_text',
              'plain_text' => 'plain_text',
              'php_code' => 'php_code',
            ),
            'default_order_toggle' => 0,
            'default_order_wrapper' => array(
              'formats' => array(
                'editor' => array(
                  'weight' => '-10',
                ),
                'panopoly_wysiwyg_text' => array(
                  'weight' => '-9',
                ),
                'panopoly_html_text' => array(
                  'weight' => '-8',
                ),
                'plain_text' => array(
                  'weight' => '-7',
                ),
                'php_code' => array(
                  'weight' => '11',
                ),
              ),
            ),
          ),
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'settings' => array(),
            'module' => 'text',
            'weight' => 0,
          ),
          'teaser' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'faq',
        'deleted' => '0',
      ),
      2 => array(
        'label' => 'Body',
        'widget' => array(
          'type' => 'text_textarea_with_summary',
          'settings' => array(
            'rows' => 20,
            'summary_rows' => 5,
          ),
          'weight' => 31,
          'module' => 'text',
        ),
        'settings' => array(
          'display_summary' => TRUE,
          'text_processing' => 1,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'settings' => array(),
            'module' => 'text',
            'weight' => 0,
          ),
          'teaser' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => FALSE,
        'description' => '',
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'glossary_item',
        'deleted' => '0',
        'default_value' => NULL,
      ),
      3 => array(
        'label' => 'Body',
        'widget' => array(
          'weight' => '2',
          'type' => 'text_textarea_with_summary',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'rows' => '20',
            'summary_rows' => 5,
          ),
        ),
        'settings' => array(
          'text_processing' => '1',
          'display_summary' => 1,
          'better_formats' => array(
            'allowed_formats_toggle' => 0,
            'allowed_formats' => array(
              'editor' => 'editor',
              'panopoly_wysiwyg_text' => 'panopoly_wysiwyg_text',
              'panopoly_html_text' => 'panopoly_html_text',
              'plain_text' => 'plain_text',
            ),
            'default_order_toggle' => 0,
            'default_order_wrapper' => array(
              'formats' => array(
                'editor' => array(
                  'weight' => '-10',
                ),
                'panopoly_wysiwyg_text' => array(
                  'weight' => '-9',
                ),
                'panopoly_html_text' => array(
                  'weight' => '-8',
                ),
                'plain_text' => array(
                  'weight' => '-7',
                ),
              ),
            ),
          ),
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'weight' => '0',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
            'weight' => 0,
          ),
          'full' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'weight' => '2',
            'settings' => array(),
            'module' => 'text',
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'External stories do not need a Body, but they should have a Summary for best display on the Archive page.',
        'default_value' => NULL,
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'news_item',
        'deleted' => '0',
      ),
      4 => array(
        'default_value' => NULL,
        'description' => '',
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'weight' => '1',
            'settings' => array(),
            'module' => 'text',
          ),
          'featured' => array(
            'label' => 'hidden',
            'module' => 'text',
            'settings' => array(
              'trim_length' => '400',
            ),
            'type' => 'text_summary_or_trimmed',
            'weight' => '1',
          ),
          'grid' => array(
            'label' => 'above',
            'settings' => array(),
            'type' => 'hidden',
            'weight' => 0,
          ),
          'search_result' => array(
            'label' => 'hidden',
            'module' => 'text',
            'settings' => array(
              'trim_length' => 600,
            ),
            'type' => 'text_trimmed',
            'weight' => '1',
          ),
          'teaser' => array(
            'label' => 'hidden',
            'module' => 'text',
            'settings' => array(
              'trim_length' => 600,
            ),
            'type' => 'text_summary_or_trimmed',
            'weight' => '1',
          ),
        ),
        'label' => 'Body',
        'required' => 0,
        'settings' => array(
          'text_processing' => '1',
          'display_summary' => 0,
          'better_formats' => array(
            'allowed_formats_toggle' => 0,
            'allowed_formats' => array(
              'editor' => 'editor',
              'panopoly_wysiwyg_text' => 'panopoly_wysiwyg_text',
              'panopoly_html_text' => 'panopoly_html_text',
              'plain_text' => 'plain_text',
            ),
            'default_order_toggle' => 0,
            'default_order_wrapper' => array(
              'formats' => array(
                'editor' => array(
                  'weight' => '-10',
                ),
                'panopoly_wysiwyg_text' => array(
                  'weight' => '-9',
                ),
                'panopoly_html_text' => array(
                  'weight' => '-8',
                ),
                'plain_text' => array(
                  'weight' => '-7',
                ),
              ),
            ),
          ),
          'user_register_form' => FALSE,
        ),
        'widget' => array(
          'weight' => '2',
          'type' => 'text_textarea_with_summary',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'rows' => '30',
            'summary_rows' => 5,
          ),
        ),
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'panopoly_page',
        'deleted' => '0',
      ),
      5 => array(
        'label' => 'Body',
        'widget' => array(
          'type' => 'text_textarea_with_summary',
          'settings' => array(
            'rows' => 20,
            'summary_rows' => 5,
          ),
          'weight' => '2',
          'module' => 'text',
        ),
        'settings' => array(
          'display_summary' => TRUE,
          'text_processing' => 1,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'weight' => '0',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => FALSE,
        'description' => '',
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'photo',
        'deleted' => '0',
        'default_value' => NULL,
      ),
      6 => array(
        'label' => 'Body',
        'widget' => array(
          'type' => 'text_textarea_with_summary',
          'settings' => array(
            'rows' => 20,
            'summary_rows' => 5,
          ),
          'weight' => '31',
          'module' => 'text',
        ),
        'settings' => array(
          'display_summary' => TRUE,
          'text_processing' => 1,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'settings' => array(),
            'module' => 'text',
            'weight' => 0,
          ),
          'teaser' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => FALSE,
        'description' => '',
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'related_link',
        'deleted' => '0',
        'default_value' => NULL,
      ),
      7 => array(
        'label' => 'Body',
        'widget' => array(
          'type' => 'text_textarea_with_summary',
          'settings' => array(
            'rows' => 20,
            'summary_rows' => 5,
          ),
          'weight' => '31',
          'module' => 'text',
        ),
        'settings' => array(
          'display_summary' => TRUE,
          'text_processing' => 1,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'weight' => '0',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
          ),
          'teaser' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => FALSE,
        'description' => '',
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'related_link_attachment',
        'deleted' => '0',
        'default_value' => NULL,
      ),
      8 => array(
        'label' => 'Body',
        'widget' => array(
          'type' => 'text_textarea_with_summary',
          'settings' => array(
            'rows' => 20,
            'summary_rows' => 5,
          ),
          'weight' => '31',
          'module' => 'text',
        ),
        'settings' => array(
          'display_summary' => TRUE,
          'text_processing' => 1,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'weight' => '1',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'label' => 'hidden',
            'type' => 'text_summary_or_trimmed',
            'settings' => array(
              'trim_length' => 600,
            ),
            'module' => 'text',
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => FALSE,
        'description' => '',
        'field_name' => 'body',
        'entity_type' => 'node',
        'bundle' => 'slide_item',
        'deleted' => '0',
        'default_value' => NULL,
      ),
    ),
    'field_external_link' => array(
      0 => array(
        'label' => 'External link',
        'widget' => array(
          'weight' => '3',
          'type' => 'link_field',
          'module' => 'link',
          'active' => 0,
          'settings' => array(),
        ),
        'settings' => array(
          'validate_url' => 1,
          'url' => 0,
          'title' => 'none',
          'title_value' => '',
          'title_maxlength' => '128',
          'enable_tokens' => 1,
          'display' => array(
            'url_cutoff' => '80',
          ),
          'attributes' => array(
            'target' => 'default',
            'rel' => '',
            'class' => '',
            'configurable_title' => 0,
            'title' => '',
          ),
          'linkit' => array(
            'enable' => 0,
            'insert_plugin' => '',
          ),
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'hidden',
            'weight' => '2',
            'settings' => array(),
          ),
          'full' => array(
            'label' => 'hidden',
            'type' => 'hidden',
            'weight' => '4',
            'settings' => array(),
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'Enter the URL of a story hosted on an external site.',
        'default_value' => NULL,
        'field_name' => 'field_external_link',
        'entity_type' => 'node',
        'bundle' => 'news_item',
        'deleted' => '0',
      ),
    ),
    'field_faq_category' => array(
      0 => array(
        'label' => 'FAQ Category',
        'widget' => array(
          'weight' => '5',
          'type' => 'options_select',
          'module' => 'options',
          'active' => 1,
          'settings' => array(),
        ),
        'settings' => array(
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'taxonomy_term_reference_link',
            'settings' => array(),
            'module' => 'taxonomy',
            'weight' => 1,
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 1,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_faq_category',
        'entity_type' => 'node',
        'bundle' => 'faq',
        'deleted' => '0',
      ),
    ),
    'field_featured_image' => array(
      0 => array(
        'label' => 'Image',
        'widget' => array(
          'weight' => '1',
          'type' => 'image_image',
          'module' => 'image',
          'active' => 1,
          'settings' => array(
            'progress_indicator' => 'throbber',
            'preview_image_style' => 'thumbnail',
            'allowed_types' => array(
              0 => 'image',
            ),
            'browser_plugins' => array(),
            'allowed_schemes' => array(
              0 => 'public',
              1 => 'private',
            ),
          ),
        ),
        'settings' => array(
          'file_directory' => 'gallery',
          'file_extensions' => 'png gif jpg jpeg',
          'max_filesize' => '2 MB',
          'max_resolution' => '640x480',
          'min_resolution' => '160x120',
          'alt_field' => 1,
          'title_field' => 1,
          'default_image' => 0,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'image',
            'weight' => '1',
            'settings' => array(
              'image_style' => '',
              'image_link' => '',
            ),
            'module' => 'image',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 1,
        'description' => '',
        'field_name' => 'field_featured_image',
        'entity_type' => 'node',
        'bundle' => 'photo',
        'deleted' => '0',
      ),
    ),
    'field_gallery' => array(
      0 => array(
        'label' => 'Gallery',
        'widget' => array(
          'weight' => '3',
          'type' => 'options_buttons',
          'module' => 'options',
          'active' => 1,
          'settings' => array(),
        ),
        'settings' => array(
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'hidden',
            'weight' => '2',
            'settings' => array(),
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 1,
        'description' => 'Which gallery should this photo be assigned to?',
        'default_value' => NULL,
        'field_name' => 'field_gallery',
        'entity_type' => 'node',
        'bundle' => 'photo',
        'deleted' => '0',
      ),
    ),
    'field_home_page' => array(
      0 => array(
        'label' => 'Home page',
        'widget' => array(
          'weight' => '31',
          'type' => 'options_buttons',
          'module' => 'options',
          'active' => 1,
          'settings' => array(),
        ),
        'settings' => array(
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'hidden',
            'weight' => '2',
            'settings' => array(),
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'search_result' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'If this content is part of the home page, please select Yes to allow for easy editing access.',
        'default_value' => NULL,
        'field_name' => 'field_home_page',
        'entity_type' => 'node',
        'bundle' => 'panopoly_page',
        'deleted' => '0',
      ),
    ),
    'field_link_category' => array(
      0 => array(
        'label' => 'Link Category',
        'widget' => array(
          'weight' => '32',
          'type' => 'options_select',
          'module' => 'options',
          'active' => 1,
          'settings' => array(),
        ),
        'settings' => array(
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'above',
            'type' => 'taxonomy_term_reference_link',
            'settings' => array(),
            'module' => 'taxonomy',
            'weight' => 1,
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'Select a category for this link',
        'default_value' => NULL,
        'field_name' => 'field_link_category',
        'entity_type' => 'node',
        'bundle' => 'related_link',
        'deleted' => '0',
      ),
      1 => array(
        'label' => 'Link Category',
        'widget' => array(
          'weight' => '33',
          'type' => 'options_select',
          'module' => 'options',
          'active' => 1,
          'settings' => array(),
        ),
        'settings' => array(
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'hidden',
            'weight' => '1',
            'settings' => array(),
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => '',
        'default_value' => NULL,
        'field_name' => 'field_link_category',
        'entity_type' => 'node',
        'bundle' => 'related_link_attachment',
        'deleted' => '0',
      ),
    ),
    'field_publication_date' => array(
      0 => array(
        'label' => 'Publication date',
        'widget' => array(
          'weight' => '5',
          'type' => 'date_popup',
          'module' => 'date',
          'active' => 1,
          'settings' => array(
            'input_format' => 'M j Y - g:i:sa',
            'input_format_custom' => '',
            'year_range' => '-3:+3',
            'increment' => '15',
            'label_position' => 'above',
            'text_parts' => array(),
          ),
        ),
        'settings' => array(
          'default_value' => 'now',
          'default_value_code' => '',
          'default_value2' => 'same',
          'default_value_code2' => '',
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'date_default',
            'weight' => '4',
            'settings' => array(
              'format_type' => 'panopoly_day',
              'fromto' => 'both',
              'multiple_number' => '',
              'multiple_from' => '',
              'multiple_to' => '',
            ),
            'module' => 'date',
          ),
          'full' => array(
            'label' => 'hidden',
            'type' => 'date_default',
            'weight' => '0',
            'settings' => array(
              'format_type' => 'panopoly_day',
              'fromto' => 'both',
              'multiple_number' => '',
              'multiple_from' => '',
              'multiple_to' => '',
            ),
            'module' => 'date',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 1,
        'description' => 'Date the story was published.',
        'field_name' => 'field_publication_date',
        'entity_type' => 'node',
        'bundle' => 'news_item',
        'deleted' => '0',
      ),
    ),
    'field_slide_image' => array(
      0 => array(
        'label' => 'Image',
        'widget' => array(
          'weight' => '35',
          'type' => 'media_generic',
          'module' => 'media',
          'active' => 1,
          'settings' => array(
            'progress_indicator' => 'throbber',
            'allowed_types' => array(
              0 => 'image',
            ),
            'browser_plugins' => array(),
            'allowed_schemes' => array(
              0 => 'public',
              1 => 'private',
            ),
          ),
        ),
        'settings' => array(
          'file_directory' => 'ddblock',
          'file_extensions' => 'jpg jpeg png gif',
          'max_filesize' => '',
          'description_field' => 0,
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'file_rendered',
            'weight' => '0',
            'settings' => array(
              'file_view_mode' => 'untouched',
            ),
            'module' => 'file_entity',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 1,
        'description' => 'Image to be used for the Slide image and Pager image.',
        'field_name' => 'field_slide_image',
        'entity_type' => 'node',
        'bundle' => 'slide_item',
        'deleted' => '0',
      ),
    ),
    'field_slide_pager_item_text' => array(
      0 => array(
        'label' => 'Pager Item text',
        'widget' => array(
          'weight' => '32',
          'type' => 'text_textfield',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'size' => '60',
          ),
        ),
        'settings' => array(
          'text_processing' => '0',
          'linkit' => array(
            'enable' => 0,
            'insert_plugin' => '',
          ),
          'better_formats' => array(
            'allowed_formats_toggle' => 0,
            'allowed_formats' => array(
              'editor' => 'editor',
              'panopoly_wysiwyg_text' => 'panopoly_wysiwyg_text',
              'panopoly_html_text' => 'panopoly_html_text',
              'plain_text' => 'plain_text',
              'php_code' => 'php_code',
            ),
            'default_order_toggle' => 0,
            'default_order_wrapper' => array(
              'formats' => array(
                'editor' => array(
                  'weight' => '-10',
                ),
                'panopoly_wysiwyg_text' => array(
                  'weight' => '-9',
                ),
                'panopoly_html_text' => array(
                  'weight' => '-8',
                ),
                'plain_text' => array(
                  'weight' => '-7',
                ),
                'php_code' => array(
                  'weight' => '11',
                ),
              ),
            ),
          ),
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'hidden',
            'weight' => '2',
            'settings' => array(),
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 1,
        'description' => 'Used for the text of a pager item.',
        'default_value' => NULL,
        'field_name' => 'field_slide_pager_item_text',
        'entity_type' => 'node',
        'bundle' => 'slide_item',
        'deleted' => '0',
      ),
    ),
    'field_slide_text' => array(
      0 => array(
        'label' => 'Slide Text',
        'widget' => array(
          'weight' => '34',
          'type' => 'text_textarea',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'rows' => '5',
          ),
        ),
        'settings' => array(
          'text_processing' => '0',
          'linkit' => array(
            'enable' => 0,
            'insert_plugin' => '',
          ),
          'better_formats' => array(
            'allowed_formats_toggle' => 0,
            'allowed_formats' => array(
              'editor' => 'editor',
              'panopoly_wysiwyg_text' => 'panopoly_wysiwyg_text',
              'panopoly_html_text' => 'panopoly_html_text',
              'plain_text' => 'plain_text',
              'php_code' => 'php_code',
            ),
            'default_order_toggle' => 0,
            'default_order_wrapper' => array(
              'formats' => array(
                'editor' => array(
                  'weight' => '-10',
                ),
                'panopoly_wysiwyg_text' => array(
                  'weight' => '-9',
                ),
                'panopoly_html_text' => array(
                  'weight' => '-8',
                ),
                'plain_text' => array(
                  'weight' => '-7',
                ),
                'php_code' => array(
                  'weight' => '11',
                ),
              ),
            ),
          ),
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'inline',
            'type' => 'text_default',
            'weight' => '3',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 1,
        'description' => 'Used for the text on a slide.',
        'default_value' => NULL,
        'field_name' => 'field_slide_text',
        'entity_type' => 'node',
        'bundle' => 'slide_item',
        'deleted' => '0',
      ),
    ),
    'field_slide_url' => array(
      0 => array(
        'label' => 'URL',
        'widget' => array(
          'weight' => '33',
          'type' => 'text_textfield',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'size' => '60',
          ),
        ),
        'settings' => array(
          'text_processing' => '0',
          'linkit' => array(
            'enable' => 0,
            'insert_plugin' => '',
          ),
          'better_formats' => array(
            'allowed_formats_toggle' => 0,
            'allowed_formats' => array(
              'editor' => 'editor',
              'panopoly_wysiwyg_text' => 'panopoly_wysiwyg_text',
              'panopoly_html_text' => 'panopoly_html_text',
              'plain_text' => 'plain_text',
              'php_code' => 'php_code',
            ),
            'default_order_toggle' => 0,
            'default_order_wrapper' => array(
              'formats' => array(
                'editor' => array(
                  'weight' => '-10',
                ),
                'panopoly_wysiwyg_text' => array(
                  'weight' => '-9',
                ),
                'panopoly_html_text' => array(
                  'weight' => '-8',
                ),
                'plain_text' => array(
                  'weight' => '-7',
                ),
                'php_code' => array(
                  'weight' => '11',
                ),
              ),
            ),
          ),
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'hidden',
            'weight' => '4',
            'settings' => array(),
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'Enter the URL you wish to link to.',
        'default_value' => NULL,
        'field_name' => 'field_slide_url',
        'entity_type' => 'node',
        'bundle' => 'slide_item',
        'deleted' => '0',
      ),
    ),
    'field_source' => array(
      0 => array(
        'label' => 'Source',
        'widget' => array(
          'weight' => '4',
          'type' => 'text_textfield',
          'module' => 'text',
          'active' => 1,
          'settings' => array(
            'size' => '60',
          ),
        ),
        'settings' => array(
          'text_processing' => '0',
          'linkit' => array(
            'enable' => 0,
            'insert_plugin' => '',
          ),
          'better_formats' => array(
            'allowed_formats_toggle' => 0,
            'allowed_formats' => array(
              'editor' => 'editor',
              'panopoly_wysiwyg_text' => 'panopoly_wysiwyg_text',
              'panopoly_html_text' => 'panopoly_html_text',
              'plain_text' => 'plain_text',
            ),
            'default_order_toggle' => 0,
            'default_order_wrapper' => array(
              'formats' => array(
                'editor' => array(
                  'weight' => '-10',
                ),
                'panopoly_wysiwyg_text' => array(
                  'weight' => '-9',
                ),
                'panopoly_html_text' => array(
                  'weight' => '-8',
                ),
                'plain_text' => array(
                  'weight' => '-7',
                ),
              ),
            ),
          ),
          'user_register_form' => FALSE,
        ),
        'display' => array(
          'default' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'weight' => '3',
            'settings' => array(),
            'module' => 'text',
          ),
          'full' => array(
            'label' => 'hidden',
            'type' => 'text_default',
            'weight' => '3',
            'settings' => array(),
            'module' => 'text',
          ),
          'teaser' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
          'featured' => array(
            'type' => 'hidden',
            'label' => 'above',
            'settings' => array(),
            'weight' => 0,
          ),
        ),
        'required' => 0,
        'description' => 'The source of the news story, if not produced specifically for this site. Examples: UC Berkeley NewsCenter, San Francisco Chronicle, NBC Bay Area.',
        'default_value' => NULL,
        'field_name' => 'field_source',
        'entity_type' => 'node',
        'bundle' => 'news_item',
        'deleted' => '0',
      ),
    ),
  ),
);
