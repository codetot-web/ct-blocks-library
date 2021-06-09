import metadata from './block.json';
import edit from './edit';
import save from './save';

const { __ } = wp.i18n;

const { name } = metadata;

export { metadata, name };

export const settings = {
	...metadata,
	title: __( 'CT - Divider', 'ct-blocks-library' ),
	edit,
	save,
};
