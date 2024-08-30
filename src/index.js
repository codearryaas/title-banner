import { registerBlockVariation } from "@wordpress/blocks";

const coverBlockVariationName = "racase/title-banner";
registerBlockVariation("core/cover", {
	name: coverBlockVariationName,
	title: "Title Banner",
	description: "Displays Featured image with Post Title.",
	category: "theme",
	keywords: ["Banner", "Post"],
	attributes: {
		namespace: coverBlockVariationName,
		align: "wide",
		customGradient:
			"linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%)",
		useFeaturedImage: true,
		dimRatio: 40, // opacity
		style: {
			color: { text: "#fafafa" },
			elements: { link: { color: { text: "#fafafa" } } },
		},
	},
	innerBlocks: [
		[
			"core/post-title",
			{
				textAlign: "center",
			},
		],
	],
	isActive: function (blockAttributes, variationAttributes) {
		return coverBlockVariationName === variationAttributes?.namespace;
	},
});
