<?php

function update_swiftype_document( $document, $post ) {
   $document['fields'][] = array( 'name' => 'blog_body',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'b_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'content0',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'c_content_0_c_content_section', true ) );
                                  
   $document['fields'][] = array( 'name' => 'content1',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'c_content_1_c_content_section', true ) );
                                  
   $document['fields'][] = array( 'name' => 'content2',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'c_content_2_c_content_section', true ) );
                                  
   $document['fields'][] = array( 'name' => 'content3',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'c_content_3_c_content_section', true ) );
                                  
   $document['fields'][] = array( 'name' => 'content4',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'c_content_4_c_content_section', true ) );
                                  
   $document['fields'][] = array( 'name' => 'content_header0',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'c_content_0_c_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'content_header1',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'c_content_1_c_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'content_header2',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'c_content_2_c_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'content_header3',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'c_content_3_c_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'content_header4',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'c_content_4_c_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'employee_name',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'bio_name', true ) );
                                  
   $document['fields'][] = array( 'name' => 'employee_title',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'bio_title', true ) );
                                  
   $document['fields'][] = array( 'name' => 'feature_text0',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'fg_features_0_fg_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'feature_text1',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'fg_features_1_fg_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'feature_text2',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'fg_features_2_fg_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'file',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'ff_file_name', true ) );
                                  
   $document['fields'][] = array( 'name' => 'event',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'e_event_description', true ) );
                                  
   $document['fields'][] = array( 'name' => 'grantee_institution0',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'g_grantees_0_g_institution', true ) );
                                  
   $document['fields'][] = array( 'name' => 'grantee_institution1',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'g_grantees_1_g_institution', true ) );
                                  
   $document['fields'][] = array( 'name' => 'grantee_institution2',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'g_grantees_2_g_institution', true ) );
                                  
   $document['fields'][] = array( 'name' => 'grantee_institution3',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'g_grantees_3_g_institution', true ) );
                                  
   $document['fields'][] = array( 'name' => 'grantee_mentor',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'g_mentor', true ) );
                                  
   $document['fields'][] = array( 'name' => 'grantee_name0',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'g_grantees_0_g_grantee', true ) );
                                  
   $document['fields'][] = array( 'name' => 'grantee_name1',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'g_grantees_1_g_grantee', true ) );
                                  
   $document['fields'][] = array( 'name' => 'grantee_name2',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'g_grantees_2_g_grantee', true ) );
                                  
   $document['fields'][] = array( 'name' => 'grantee_name3',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'g_grantees_3_g_grantee', true ) );
                                  
   $document['fields'][] = array( 'name' => 'grantee_research',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'g_research_area', true ) );
                                  
   $document['fields'][] = array( 'name' => 'landing_content0',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'l_content_section_0_l_text', true ) );
                                  
   $document['fields'][] = array( 'name' => 'landing_content1',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'l_content_section_1_l_text', true ) );
                                  
   $document['fields'][] = array( 'name' => 'landing_content2',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'l_content_section_2_l_text', true ) );
                                  
   $document['fields'][] = array( 'name' => 'landing_content3',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'l_content_section_3_l_text', true ) );
                                  
   $document['fields'][] = array( 'name' => 'landing_content4',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'l_content_section_4_l_text', true ) );
                                  
   $document['fields'][] = array( 'name' => 'lost_intro',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'lo_intro_text', true ) );
                                  
   $document['fields'][] = array( 'name' => 'staff_name',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'v_staff_name', true ) );
                                  
   $document['fields'][] = array( 'name' => 'page_header',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'c_page_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_body0',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'pf_features_0_pf_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_body1',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'pf_features_1_pf_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_body2',
                                  'type' => 'text',
                                  'value' => get_post_meta( $post->ID, 'pf_features_2_pf_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_body0_0',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_0_pf_content_block_0_pf_content_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_body0_1',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_0_pf_content_block_1_pf_content_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_body0_2',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_0_pf_content_block_2_pf_content_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_body1_0',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_1_pf_content_block_0_pf_content_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_body1_1',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_1_pf_content_block_1_pf_content_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_body1_2',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_1_pf_content_block_2_pf_content_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_body2_0',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_2_pf_content_block_0_pf_content_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_body2_1',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_2_pf_content_block_1_pf_content_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_body2_2',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_2_pf_content_block_2_pf_content_body', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_header0_0',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_0_pf_content_block_0_pf_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_header0_1',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_0_pf_content_block_1_pf_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_header0_2',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_0_pf_content_block_2_pf_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_header1_0',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_1_pf_content_block_0_pf_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_header1_1',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_1_pf_content_block_1_pf_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_header1_2',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_1_pf_content_block_2_pf_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_header2_0',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_2_pf_content_block_0_pf_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_header2_1',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_2_pf_content_block_1_pf_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_content_header2_2',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_2_pf_content_block_2_pf_content_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_header0',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_0_pf_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_header1',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_1_pf_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'program_header2',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'pf_features_2_pf_header', true ) );
                                  
   $document['fields'][] = array( 'name' => 'pull_quote_for_feed',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'b_pull_quote_for_feed', true ) );
                                  
   $document['fields'][] = array( 'name' => 'quilt_author',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'q_author', true ) );
                                  
   $document['fields'][] = array( 'name' => 'quilt_description',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'q_description', true ) );
                                  
   $document['fields'][] = array( 'name' => 'support_hosting',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'hosting_sponsoring_organization', true ) );
                                  
   $document['fields'][] = array( 'name' => 'support_meeting',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'meeting_site', true ) );
                                  
   $document['fields'][] = array( 'name' => 'support_city',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'city', true ) );
                                  
   $document['fields'][] = array( 'name' => 'support_province',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'province', true ) );
                                  
   $document['fields'][] = array( 'name' => 'support_state',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 'state', true ) );
                                  
   $document['fields'][] = array( 'name' => 'support_zip',
                                  'type' => 'enum',
                                  'value' => get_post_meta( $post->ID, 'zip_postal_code', true ) );
                                  
   $document['fields'][] = array( 'name' => 'teaser',
                                  'type' => 'string',
                                  'value' => get_post_meta( $post->ID, 't_teaser', true ) );

   return $document;
}

add_filter( 'swiftype_document_builder', 'update_swiftype_document', 10, 2 );

?>