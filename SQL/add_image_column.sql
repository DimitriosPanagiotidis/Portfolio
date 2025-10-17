-- Add image column to educations table
ALTER TABLE `educations` ADD COLUMN `image` VARCHAR(255) DEFAULT 'default-school.png' AFTER `description`;

-- Update existing records with sample image names (you can change these to your actual image filenames)
UPDATE `educations` SET `image` = 'isk-duin.png' WHERE `id` = 1;
UPDATE `educations` SET `image` = 'mbo-rijnland.png' WHERE `id` = 2;
UPDATE `educations` SET `image` = 'roc-mondriaan.png' WHERE `id` = 3;
UPDATE `educations` SET `image` = 'nova-college.png' WHERE `id` = 4;
