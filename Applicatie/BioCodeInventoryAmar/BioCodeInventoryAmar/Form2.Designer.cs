namespace BioCodeInventoryAmar
{
    partial class Form2
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.lbxItems = new System.Windows.Forms.ListBox();
            this.btnSendAmar = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.lblUserAmar = new System.Windows.Forms.Label();
            this.SuspendLayout();
            // 
            // lbxItems
            // 
            this.lbxItems.FormattingEnabled = true;
            this.lbxItems.Location = new System.Drawing.Point(47, 96);
            this.lbxItems.Name = "lbxItems";
            this.lbxItems.Size = new System.Drawing.Size(206, 134);
            this.lbxItems.TabIndex = 0;
            // 
            // btnSendAmar
            // 
            this.btnSendAmar.Location = new System.Drawing.Point(47, 236);
            this.btnSendAmar.Name = "btnSendAmar";
            this.btnSendAmar.Size = new System.Drawing.Size(75, 23);
            this.btnSendAmar.TabIndex = 1;
            this.btnSendAmar.Text = "Send";
            this.btnSendAmar.UseVisualStyleBackColor = true;
            this.btnSendAmar.Click += new System.EventHandler(this.btnSendAmar_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(45, 80);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(119, 13);
            this.label1.TabIndex = 2;
            this.label1.Text = "Dit is de Inventorie van:";
            // 
            // lblUserAmar
            // 
            this.lblUserAmar.AutoSize = true;
            this.lblUserAmar.Location = new System.Drawing.Point(170, 80);
            this.lblUserAmar.Name = "lblUserAmar";
            this.lblUserAmar.Size = new System.Drawing.Size(16, 13);
            this.lblUserAmar.TabIndex = 3;
            this.lblUserAmar.Text = "---";
            // 
            // Form2
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(348, 322);
            this.Controls.Add(this.lblUserAmar);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnSendAmar);
            this.Controls.Add(this.lbxItems);
            this.Name = "Form2";
            this.Text = "Form2";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.ListBox lbxItems;
        private System.Windows.Forms.Button btnSendAmar;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Label lblUserAmar;




    }
}