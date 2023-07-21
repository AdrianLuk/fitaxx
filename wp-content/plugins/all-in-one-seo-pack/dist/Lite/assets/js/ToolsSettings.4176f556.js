import{c as a,e as o}from"./links.4e9269a4.js";import{a as t}from"./addons.b699e1f7.js";import{a as n}from"./allowed.11aae9a6.js";const u={computed:{toolsSettings(){const s=a(),e=[{value:"webmasterTools",label:this.$t.__("Webmaster Tools",this.$td),access:"aioseo_general_settings"},{value:"rssContent",label:this.$t.__("RSS Content",this.$td),access:"aioseo_general_settings"},{value:"advanced",label:this.$t.__("Advanced",this.$td),access:"aioseo_general_settings"},{value:"searchAppearance",label:this.$t.__("Search Appearance",this.$td),access:"aioseo_search_appearance_settings"},{value:"social",label:this.$t.__("Social Networks",this.$td),access:"aioseo_social_networks_settings"},{value:"sitemap",label:this.$t.__("Sitemaps",this.$td),access:"aioseo_sitemap_settings"},{value:"robots",label:this.$t.__("Robots.txt",this.$td),access:"aioseo_tools_settings"},{value:"breadcrumbs",label:this.$t.__("Breadcrumbs",this.$td),access:"aioseo_general_settings"}];return o().internalOptions.internal.deprecatedOptions.includes("badBotBlocker")&&e.push({value:"blocker",label:this.$t.__("Bad Bot Blocker",this.$td),access:"aioseo_tools_settings"}),this.$isPro&&e.push({value:"accessControl",label:this.$t.__("Access Control",this.$td),access:"aioseo_admin"}),!s.isUnlicensed&&this.showImageSeoReset&&e.push({value:"image",label:this.$t.__("Image SEO",this.$td),access:"aioseo_search_appearance_settings"}),!s.isUnlicensed&&this.showLocalBusinessReset&&e.push({value:"localBusiness",label:this.$t.__("Local Business SEO",this.$td),access:"aioseo_local_seo_settings"}),!s.isUnlicensed&&this.showRedirectsReset&&e.push({value:"redirects",label:this.$t.__("Redirects",this.$td),access:"aioseo_redirects_settings"}),!s.isUnlicensed&&this.showLinkAssistantReset&&e.push({value:"linkAssistant",label:this.$t.__("Link Assistant",this.$td),access:"aioseo_link_assistant_settings"}),e.filter(i=>n(i.access))},showImageSeoReset(){const s=t.getAddon("aioseo-image-seo");return s&&s.isActive&&!s.requiresUpgrade},showLocalBusinessReset(){const s=t.getAddon("aioseo-local-business");return s&&s.isActive&&!s.requiresUpgrade},showRedirectsReset(){const s=t.getAddon("aioseo-redirects");return s&&s.isActive&&!s.requiresUpgrade},showLinkAssistantReset(){const s=t.getAddon("aioseo-link-assistant");return s&&s.isActive&&!s.requiresUpgrade}}};export{u as T};
